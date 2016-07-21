<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct() {
		parent::__construct();
                $this->template->set_platform('admin');
                $this->template->set_theme('light-bootstrap');  
	}


	public function index() {
		$this->template->set_title('Belancon | Dashboard');
                //css
                $this->template->set_css('bootstrap.min.css');
                $this->template->set_css('animate.min.css'); 
                $this->template->set_css('light-bootstrap-dashboard.css');  
                $this->template->set_css('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', 'remote');            
                $this->template->set_css('http://fonts.googleapis.com/css?family=Roboto:400,700,300', 'remote');
                $this->template->set_css('pe-icon-7-stroke.css');          
                //js
                $this->template->set_js('jquery-1.10.2.js','header');
                $this->template->set_js('bootstrap.min.js','footer');
                $this->template->set_js('bootstrap-checkbox-radio-switch.js','footer');    
                $this->template->set_js('bootstrap-notify.js','footer');
                $this->template->set_js('light-bootstrap-dashboard.js','footer'); 

                //set text on page i.e text on header etc
                $this->template->set_text('header', 'Dashboard');

                //set layout                
                $this->template->set_part('public_header', '_parts/public_header');  
                $this->template->set_part('navbar', '_parts/navbar'); 
                $this->template->set_part('sidebar', '_parts/sidebar');
                $this->template->set_part('footer', '_parts/footer');

                $this->template->set_layout('layouts/main');

                //set content/page
                $this->template->set_content('pages/general/dashboard');

                $this->template->render();
	}
}