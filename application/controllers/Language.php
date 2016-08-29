<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends MY_Controller {

    private $_modul_name = "Setting Language";

	function __construct() {
		parent::__construct();
        $this->template->set_platform('admin');
        $this->template->set_theme('light-bootstrap');
        $this->load->model('setting_languages_model');
	}

    public function index($page = 1)
    {       
        $total = $this->setting_languages_model->count_rows();

        //$this->load->helper('dateindo');
        
        $this->template->set_title('Belancon | '.$this->_modul_name.' - List');
        $this->template->set_meta('author','Belancon Team');
        $this->template->set_meta('keyword','');
        $this->template->set_meta('description','');
        $this->template->set_text('header', $this->_modul_name);
            
        $this->_loadcss();
        $this->_loadjs();
        $this->_loadpart();
        //$this->template->set_part('scripts', 'scripts/admin/article-index');

        //get data
        //$this->post_model->paginate(10,$total_posts);
        $data['models'] = $this->setting_languages_model->order_by('id', 'DESC')->paginate($this->_PER_PAGE, $total, $page);
        $data['pagination'] = $this->generate_pagination(site_url('language'), $total);

        $this->template->set_layout('layouts/main');
        $this->template->set_content('pages/language/index', $data);     
        $this->template->render();
    }

    public function search($search, $page = 1)
    {       
        $total = $this->setting_languages_model->where('name', 'LIKE', $search, TRUE)->where('value', 'LIKE', $search, TRUE)->count_rows_without_trashed();
        //$this->load->helper('dateindo');
        
        $this->template->set_title('Belancon | '.$this->_modul_name.' - List');
        $this->template->set_meta('author','Belancon Team');
        $this->template->set_meta('keyword','');
        $this->template->set_meta('description','');
        $this->template->set_text('header', $this->_modul_name);

        $this->_loadcss();
        $this->_loadjs();
        $this->_loadpart();
        //$this->template->set_part('scripts', 'scripts/admin/article-index');

        //get data
        //$this->post_model->paginate(10,$total_posts);
        $data['models'] = $this->setting_languages_model->where('name', 'LIKE', $search, TRUE)->where('value', 'LIKE', $search, TRUE)->order_by('id', 'DESC')->paginate($this->_PER_PAGE, $total, $page);
        $data['pagination'] = $this->generate_pagination(site_url('language/search/'.$search.'/'), $total);
        $data['search'] = $search;

        $this->template->set_layout('layouts/main');
        $this->template->set_content('pages/language/index', $data);        
        $this->template->render();
    }

    public function add() {
        $this->load->helper('form');

        $this->template->set_title('Belancon | '.$this->_modul_name.' - Add');
        $this->template->set_meta('author','Belancon Team');
        $this->template->set_meta('keyword','');
        $this->template->set_meta('description','');
        $this->template->set_text('header', $this->_modul_name.' - Form');
            
        $this->_loadcss();
        $this->_loadjs();
        $this->_loadpart();

        $languages  = array(
            array(
                'value' => 'id',
                'text' => 'Indonesian'
            ),
            array(
                'value' => 'en',
                'text' => 'English'
            ),
        );

        $data['languages'] = $languages;

        $this->template->set_layout('layouts/main');
        $this->template->set_content('pages/language/add', $data);        
        $this->template->render();
    }

    public function update($id) {
        $this->load->helper('form');

        $row = $this->setting_languages_model->get($id);

        if($id && $row) {
            $this->template->set_title('Belancon | '.$this->_modul_name.' - Update');
            $this->template->set_meta('author','Belancon Team');
            $this->template->set_meta('keyword','');
            $this->template->set_meta('description','');
            $this->template->set_text('header', $this->_modul_name.' - Form');
                
            $this->_loadcss();
            $this->_loadjs();
            $this->_loadpart();

            $languages  = array(
                array(
                    'value' => 'id',
                    'text' => 'Indonesian'
                ),
                array(
                    'value' => 'en',
                    'text' => 'English'
                ),
            );

            $data['languages'] = $languages;
            $data['model'] = $row;

            $this->template->set_layout('layouts/main');
            $this->template->set_content('pages/language/update', $data);        
            $this->template->render();        
        } else {
            redirect('/','refresh');
        }
    }

    public  function do_add() {
        if(!$this->input->is_ajax_request()) {
            redirect('/','refresh');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('value', 'Value', 'required');
         $this->form_validation->set_rules('language', 'Language', 'required|callback_check_setting_exist');

        $this->form_validation->set_message('required', '{field} is required');        

        if($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $value = $this->input->post('value', TRUE);
            $language = $this->input->post('language', TRUE);

            $data = array(
                'name' => $name,
                'value' => $value,
                'lang' => $language
            );

            $result = $this->setting_languages_model->insert($data);

            if($result) {
                $this->session->set_flashdata('success_message', 'Success Added '.$this->_modul_name);
                $response = array('status'=> TRUE);
            } else {
                $response = array('status'=> FALSE, 'error' => 'Failed Added '.$this->_modul_name);
            }

            echo json_encode($response);
        } else {
            echo json_encode(array('status'=> FALSE, 'error' => validation_errors()));
        }
    }

    public  function do_update() {
        if(!$this->input->is_ajax_request()) {
            redirect('/','refresh');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('value', 'Value', 'required');
         $this->form_validation->set_rules('language', 'Language', 'required|callback_check_setting_exist');

        $this->form_validation->set_message('required', '{field} is required');        

        if($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id', TRUE);
            $name = $this->input->post('name', TRUE);
            $value = $this->input->post('value', TRUE);
            $language = $this->input->post('language', TRUE);

            $data = array(
                'name' => $name,
                'value' => $value,
                'lang' => $language
            );

            $result = $this->setting_languages_model->update($data, $id);

            if($result) {
                $this->session->set_flashdata('success_message', 'Success Updated '.$this->_modul_name);
                $response = array('status'=> TRUE);
            } else {
                $response = array('status'=> FALSE, 'error' => 'Fail Updated '.$this->_modul_name);
            }

            echo json_encode($response);
        } else {
            echo json_encode(array('status'=> FALSE, 'error' => validation_errors()));
        }
    }

    public function delete($id) {
        if($id) {
            $result = $this->setting_languages_model->delete($id);

            if($result) {
                $this->session->set_flashdata('success_message', 'Success Deleted '.$this->_modul_name);
                redirect('language','refresh');
            } else {
                $this->session->set_flashdata('error_message', 'Fail Deleted '.$this->_modul_name);
                redirect('language','refresh');
            }
        } else {
            redirect('/','refresh');
        }
    }

    public function check_setting_exist($lang) {
        $id = $this->input->post('id', TRUE) ? $this->input->post('id', TRUE) : NULL; 
        $name = $this->input->post('name', TRUE);
        if($this->setting_languages_model->check_setting_exist($name, $lang, $id)) {
            $this->form_validation->set_message('check_setting_exist', 'Setting with this combination name and language is exist, use other setting');
            return FALSE;
        } else {
            return TRUE;
        }
    }
	
    protected function _loadcss() {
        //css
        $this->template->set_css('bootstrap.min.css');
        $this->template->set_css('animate.min.css');
        $this->template->set_css('light-bootstrap-dashboard.css');
        $this->template->set_css('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', 'remote');
        $this->template->set_css('http://fonts.googleapis.com/css?family=Roboto:400,700,300', 'remote');
        $this->template->set_css('pe-icon-7-stroke.css');
    }
    protected function _loadjs() {
        //js
        $this->template->set_js('jquery-1.10.2.js','header');
        $this->template->set_js('bootstrap.min.js','footer');
        $this->template->set_js('bootstrap-checkbox-radio-switch.js','footer');
        $this->template->set_js('bootstrap-notify.js','footer');
        $this->template->set_js('light-bootstrap-dashboard.js','footer');
    }
    protected function _loadpart() {
        $this->template->set_part('public_header', '_parts/public_header');
        $this->template->set_part('navbar', '_parts/navbar');
        $this->template->set_part('sidebar', '_parts/sidebar');        
    }
}