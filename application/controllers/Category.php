<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	function __construct() {
		parent::__construct();
        $this->template->set_platform('admin');
        $this->template->set_theme('light-bootstrap');
        $this->load->model('category_model');
	}


	public function index() {
        $this->template->set_title('Belancon | Kategori');
        $this->_load_css();
        $this->_load_js();
        //set text on page i.e text on header etc
        $this->template->set_text('header', 'Kategori');
        //set layout
        $this->_load_layout();
        $data['categories'] = $this->category_model->get_all();
        //set content/page
        $this->template->set_content('pages/category/index', $data);
        $this->template->render();
	}

    public function add() {
        $this->load->library('form_validation');       
        $this->load->helper('form');

        $this->form_validation->set_rules('name', 'Nama', 'required|min_length[3]|is_unique[categories.name]');
        $this->form_validation->set_message('required', '{field} harus diisi');
        $this->form_validation->set_message('is_unique', '{field} sudah ada, gunakan {field} lain.');

        if($this->form_validation->run() === TRUE) {
            $name = $this->input->post('name', TRUE);
            $url = url_title($name);
            $data = array(
                'name' => $name,
                'url' => strtolower($url)
            );

            $result = $this->category_model->insert($data);

            if($result) {
                $this->session->set_flashdata('success_message', 'Berhasil Insert Kategori');
                redirect('category','refresh');
            } else {
                $this->session->set_flashdata('error_message', 'Gagal Insert Kategori');
                redirect('category','refresh');
            }
        } else {
            $this->template->set_title('Belancon | Kategori');
            $this->_load_css();
            $this->_load_js();
            //set text on page i.e text on header etc
            $this->template->set_text('header', 'Kategori - Add');
            //set layout
            $this->_load_layout();
            //set content/page
            $this->template->set_content('pages/category/insert');
            $this->template->render();
        }
    }

    public function update($id) {
        $this->load->library('form_validation');       
        $this->load->helper('form');

        $this->form_validation->set_rules('name', 'Nama', 'required|min_length[3]|callback_name_check');

        if($this->form_validation->run() === TRUE) {
            $name = $this->input->post('name', TRUE);
            $url = url_title($name);
            $data = array(
                'name' => $name,
                'url' => strtolower($url)
            );

            $result = $this->category_model->update($id, $data);

            if($result) {
                $this->session->set_flashdata('success_message', 'Berhasil Update Kategori');
                redirect('category','refresh');
            } else {
                $this->session->set_flashdata('error_message', 'Gagal Update Kategori');
                redirect('category','refresh');
            }
        } else {
            $data['category'] = $this->category_model->get($id);
            $this->template->set_title('Belancon | Kategori');
            $this->_load_css();
            $this->_load_js();
            //set text on page i.e text on header etc
            $this->template->set_text('header', 'Kategori - Update');
            //set layout
            $this->_load_layout();
            //set content/page
            $this->template->set_content('pages/category/update', $data);
            $this->template->render();
        }
    }

    public function delete($id) {
        $result = $this->category_model->delete($id);

        if($result) {
            $this->session->set_flashdata('success_message', 'Berhasil Delete Kategori');
                redirect('category','refresh');
        } else {
            $this->session->set_flashdata('error_message', 'Gagal Delete Kategori');
                redirect('category','refresh');
        }
    }

    public function name_check($name) {
        $id = $this->input->post('id');

        $result = $this->category_model->name_check($id, $name);

        if($result) {
            $this->form_validation->set_message('name_check', '{field} sudah ada, gunakan {field} lain.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    protected function _load_css() {
        //css
        $this->template->set_css('bootstrap.min.css');
        $this->template->set_css('animate.min.css');
        $this->template->set_css('light-bootstrap-dashboard.css');
        $this->template->set_css('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', 'remote');
        $this->template->set_css('http://fonts.googleapis.com/css?family=Roboto:400,700,300', 'remote');
        $this->template->set_css('pe-icon-7-stroke.css');
    }
    protected function _load_js() {
        //js
        $this->template->set_js('jquery-1.10.2.js','header');
        $this->template->set_js('bootstrap.min.js','footer');
        $this->template->set_js('bootstrap-checkbox-radio-switch.js','footer');
        $this->template->set_js('bootstrap-notify.js','footer');
        $this->template->set_js('light-bootstrap-dashboard.js','footer');
    }
    protected function _load_layout() {
        $this->template->set_part('public_header', '_parts/public_header');
        $this->template->set_part('navbar', '_parts/navbar');
        $this->template->set_part('sidebar', '_parts/sidebar');
        $this->template->set_layout('layouts/main');
    }
}