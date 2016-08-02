<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socialmedia_model extends CI_Model {

	private $table = "socmeds";

	public function get_all() {
		$query = $this->db->get_where($this->table, array('deleted' => 0));

		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return FALSE;
		}
	}

	public function get($id) {
		$query = $this->db->get_where($this->table, array('deleted' => 0, 'id'=>$id));

		return $query->row();
	}


	public function insert($data) {
		$this->db->insert($this->table, $data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

	public function update($id, $data) {
		$this->db->update($this->table, $data, array('id'=>$id));

		$result = $this->db->affected_rows();

		return $result;
	}

	public function delete($id) {
		$this->db->delete($this->table, array('id'=>$id));

		return TRUE;
	}
}