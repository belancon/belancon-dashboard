<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting_languages_model extends MY_Model
{
    public $table = 'setting_languages'; // you MUST mention the table name
    public $primary_key = 'id'; // you MUST mention the primary key
    
    public function __construct()
    {
        parent::__construct();      
    }

    public function check_setting_exist($name, $lang, $id) {

    	if($id) {
    		$result = $this->where('name', $name)->where('lang', $lang)->where('id', '!=', $id)->get_all();
    	} else {
    		$result = $this->where('name', $name)->where('lang', $lang)->get_all();
    	}

    	if($result) {
    		return TRUE;
    	} else {
    		return FALSE;
    	}
    }
}