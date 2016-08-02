<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->template->set_platform('admin');
        $this->template->set_theme('light-bootstrap');  

        $this->load->library(array('form_validation'));
        $this->load->helper(array('language'));

        $this->form_validation->set_error_delimiters('', '</br>');

        $this->lang->load('auth', 'indonesian');
	}

    public function index() {
        $this->is_admin('User');

        $data['users'] = $this->ion_auth->users()->result();

        $this->template->set_title('Belancon | User');
        $this->_load_css();
        $this->_load_js();
        //set text on page i.e text on header etc
        $this->template->set_text('header', 'User');
        //set layout
        $this->_load_layout();
        //set content/page
        $this->template->set_content('pages/user/index', $data);
        $this->template->render();
    }

    public function add() {
        $this->is_admin('User');
        //set validation form
        $this->_set_validation();

        if($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = "belancon2016"; //default password
            $email = $this->input->post('email');
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $phone = $this->input->post('phone');
            $random_number = mt_rand();
            $url = strtolower($firstname)."_".$random_number;
            $additional_data = array(
                'first_name' => $firstname,
                'last_name' => $lastname,
                'url' => $url,
                'phone' => $phone
            );
            $group = array($this->input->post('group')); // Sets user to admin.
            
            $result = $this->ion_auth->register($username, $password, $email, $additional_data, $group);

            if($result) {
                $this->session->set_flashdata('success_message', $this->ion_auth->messages());
                redirect("user/index", 'refresh');
            } else {
                $this->session->set_flashdata('error_message', $this->ion_auth->messages());
                redirect("user/index", 'refresh');
            }

        } else {
            $data['groups'] = $this->ion_auth->groups()->result();
            $this->template->set_title('Belancon | User');
            $this->_load_css();
            $this->_load_js();
            //set text on page i.e text on header etc
            $this->template->set_text('header', 'User - Form');
            //set layout
            $this->_load_layout();
            //set content/page
            $this->template->set_content('pages/user/_form_add', $data);
            $this->template->render();
        }
    }

    public function delete($id) {
        $this->is_admin('User');

        if($id) {
            $group = 'admin';
            if (!$this->ion_auth->in_group($group, $id))
            {
                $result = $this->ion_auth->delete_user($id);
                if($result) {
                    $this->session->set_flashdata('success_message', $this->ion_auth->messages());
                } else {
                    $this->session->set_flashdata('error_message', $this->ion_auth->errors());
                }
                
            } else {
                 $this->session->set_flashdata('error_message', "Gagal menghapus. anda tidak mempunyai akses menghapus user ini");                
            }   

            redirect('user/index');  
        } else {
            redirect('user/index');
        }
    }

    public function change_profile() {
        $this->is_logged_in();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {   

            $this->form_validation->set_rules('firstname', 'Nama Depan', 'required');
            $this->form_validation->set_message('required', '{field} harap diisi');

            if($this->form_validation->run() === TRUE) {
                $id = user_login('id');
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $phone = $this->input->post('phone');
                $random_number = mt_rand();
                $url = strtolower($firstname)."_".$random_number;
                $data = array(
                    'first_name' => $firstname,
                    'url' => $url,
                    'last_name' => $lastname,
                    'phone' => $phone,
                );

                $result = $this->ion_auth->update($id, $data);
                if($result) {
                    $this->session->set_flashdata('success_message', $this->ion_auth->messages());
                } else {
                    $this->session->set_flashdata('error_message', $this->ion_auth->errors());
                }

                redirect('change-profile');
            } else {
                $this->template->set_title('Belancon | User');
                $this->_load_css();
                $this->_load_js();
                //set text on page i.e text on header etc
                $this->template->set_text('header', 'User');
                //set layout
                $this->_load_layout();
                //set content/page
                $this->template->set_content('pages/user/update_profile');
                $this->template->render();
            }
        } else {

            $this->template->set_title('Belancon | User');
            $this->_load_css();
            $this->_load_js();
            //set text on page i.e text on header etc
            $this->template->set_text('header', 'User');
            //set layout
            $this->_load_layout();
            //set content/page
            $this->template->set_content('pages/user/update_profile');
            $this->template->render();
        }
    }

    public function change_password() {
        $this->is_logged_in();

        $this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
        $this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']');
        $this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required|matches[new]');

        $this->form_validation->set_message('required', '{field} harus diisi');
        $this->form_validation->set_message('min_length', '{field} tidak boleh kurang dari {param} karakter.');
        $this->form_validation->set_message('max_length', '{field} tidak boleh lebih dari {param} karakter.');
        $this->form_validation->set_message('matches', '{field} tidak sesuai');



        if ($this->form_validation->run() == true) {
            $identity = $this->session->userdata('identity');

            $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

            if ($change)
            {
                //if the password was successfully changed
                $this->session->set_flashdata('success_message', $this->ion_auth->messages());
                $this->logout();
            }
            else
            {
                $this->session->set_flashdata('error_message', $this->ion_auth->errors());
                redirect('change-password', 'refresh');
            }
        } else {
            $this->template->set_title('Belancon | User');
            $this->_load_css();
            $this->_load_js();
            //set text on page i.e text on header etc
            $this->template->set_text('header', 'User');
            //set layout
            $this->_load_layout();
            //set content/page
            $this->template->set_content('pages/user/change_password');
            $this->template->render();
        }            
    }


	public function login() {
        if($this->ion_auth->is_admin()) {
            redirect('/');
        } else {
            //validate form input
            $this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
            $this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');
            //set message
            $this->form_validation->set_message('required', '{field} harus diisi');


            if ($this->form_validation->run() == true)
            {
                // check to see if the user is logging in
                // check for "remember me"
                $remember = (bool) $this->input->post('remember');

                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
                {
                    //if the login is successful
                    //redirect them back to the home page
                    $this->session->set_flashdata('success_message', $this->ion_auth->messages());
                    redirect('/', 'refresh');
                }
                else
                {
                    // if the login was un-successful
                    // redirect them back to the login page
                    $this->session->set_flashdata('error_message', $this->ion_auth->errors());
                    redirect('login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
                }
            }
            else
            {
                $data['error_message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error_message');
                $data['success_message'] = $this->session->flashdata('success_message') ? $this->session->flashdata('success_message') : NULL;

                $this->template->set_title('Belancon | Login');
                $this->_load_css();
                $this->_load_js();        
                //set layout
                $this->_load_layout_login();
                //set content/page
                $this->template->set_content('pages/user/login', $data);
                $this->template->render();
            }
        }
	}

    // log the user out
    public function logout()
    {
        // log the user out
        $logout = $this->ion_auth->logout();

        // redirect them to the login page
        $this->session->set_flashdata('success_message', $this->ion_auth->messages());
        redirect('login', 'refresh');
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

    protected function _load_layout_login() {
        $this->template->set_part('public_header', '_parts/public_header');
        $this->template->set_layout('layouts/login');
    }

    protected function _load_layout() {
        $this->template->set_part('public_header', '_parts/public_header');
        $this->template->set_part('navbar', '_parts/navbar');
        $this->template->set_part('sidebar', '_parts/sidebar');
        $this->template->set_layout('layouts/main');
    }

    protected function _set_validation() {
        $tables = $this->config->item('tables','ion_auth');        
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|is_unique['.$tables['users'].'.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique['.$tables['users'].'.email]');
        $this->form_validation->set_rules('firstname', 'Nama Depan', 'required');
        $this->form_validation->set_rules('group', 'Grup', 'required');
        
        $this->form_validation->set_message('required', '{field} harus diisi');
        $this->form_validation->set_message('valid_email', 'Alamat {field} tidak valid');
        $this->form_validation->set_message('min_length', '{field} tidak boleh kurang dari {param} karakter.');
        $this->form_validation->set_message('is_unique', '{field} sudah digunakan');
    }


    public function is_admin($page) {
        if(!$this->ion_auth->is_admin()) {
            $this->session->set_flashdata('error_message', 'Kamu tidak mempunyai akses ke halaman '.$page);
            redirect('/', 'refresh');
        }
    }

    public function is_logged_in() {
        if(!$this->ion_auth->logged_in()) {            
            redirect('login', 'refresh');
        }
    }
}