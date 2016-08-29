<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $_PER_PAGE = 10;

        public function __construct()
        {
            parent::__construct();

            if (!$this->ion_auth->logged_in()) {
            	redirect('login');
			}
        }

    public function generate_pagination($url, $total) {
		$this->load->library('pagination');
		$config['base_url'] = $url;
		$config['total_rows'] = $total;
		$config['per_page'] = $this->_PER_PAGE;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 5;
		//config for bootstrap pagination class integration
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		
		return $this->pagination->create_links();
    }

}