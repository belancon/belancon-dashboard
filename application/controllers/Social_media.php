<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_media extends MY_Controller {

	function __construct() {
		parent::__construct();
        $this->template->set_platform('admin');
        $this->template->set_theme('light-bootstrap');
        $this->load->model('socialmedia_model');
	}


	public function index() {
        $this->template->set_title('Belancon | Social Media');
        $this->_load_css();
        $this->_load_js();
        //set text on page i.e text on header etc
        $this->template->set_text('header', 'Social Media');
        //set layout
        $this->_load_layout();
        $data['socmeds'] = $this->socialmedia_model->get_all();
        //set content/page
        $this->template->set_content('pages/social-media/index', $data);
        $this->template->render();
	}

    public function add() {
        $this->load->library('form_validation');       
        $this->load->helper('form');

        $this->form_validation->set_rules('name', 'Nama', 'required|min_length[3]');
        $this->form_validation->set_rules('icon', 'Icon', 'required|min_length[3]');

        $this->form_validation->set_message('required', '{field} harus diisi');
        $this->form_validation->set_message('min_length', '{field} tidak boleh kurang dari {param} karakter.');

        if($this->form_validation->run() === TRUE) {
            $name = $this->input->post('name', TRUE);
            $icon = $this->input->post('icon', TRUE);
            $data = array(
                'name' => $name,
                'icon' => $icon
            );

            $result = $this->socialmedia_model->insert($data);

            if($result) {
                $this->session->set_flashdata('success_message', 'Berhasil Insert Social Media');
                redirect('social-media','refresh');
            } else {
                $this->session->set_flashdata('error_message', 'Gagal Insert Social Media');
                redirect('social-media','refresh');
            }
        } else {
            $this->template->set_title('Belancon | Social Media');
            $this->_load_css();
            $this->_load_js();
            //set text on page i.e text on header etc
            $this->template->set_text('header', 'Social Media - Add');
            //set layout
            $this->_load_layout();
            //set content/page
            $this->template->set_content('pages/social-media/insert');
            $this->template->render();
        }
    }

    public function update($id) {
        $this->load->library('form_validation');       
        $this->load->helper('form');

        $this->form_validation->set_rules('name', 'Nama', 'required|min_length[3]');
        $this->form_validation->set_rules('icon', 'Icon', 'required|min_length[3]');

        $this->form_validation->set_message('required', '{field} harus diisi');
        $this->form_validation->set_message('min_length', '{field} tidak boleh kurang dari {param} karakter.');

        if($this->form_validation->run() === TRUE) {
            $name = $this->input->post('name', TRUE);
            $icon = $this->input->post('icon', TRUE);
            $data = array(
                'name' => $name,
                'icon' => $icon
            );

            $result = $this->socialmedia_model->update($id, $data);

            if($result) {
                $this->session->set_flashdata('success_message', 'Berhasil Update Social Media');
                redirect('social-media','refresh');
            } else {
                $this->session->set_flashdata('error_message', 'Gagal Update Social Media');
                redirect('social-media','refresh');
            }
        } else {
            $data['socmed'] = $this->socialmedia_model->get($id);
            $this->template->set_title('Belancon | Social Media');
            $this->_load_css();
            $this->_load_js();
            //set text on page i.e text on header etc
            $this->template->set_text('header', 'Social Media - Update');
            //set layout
            $this->_load_layout();
            //set content/page
            $this->template->set_content('pages/social-media/update', $data);
            $this->template->render();
        }
    }

    public function delete($id) {
        $result = $this->socialmedia_model->delete($id);

        if($result) {
            $this->session->set_flashdata('success_message', 'Berhasil Delete Social Media');
                redirect('social-media','refresh');
        } else {
            $this->session->set_flashdata('error_message', 'Gagal Delete Social Media');
                redirect('social-media','refresh');
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