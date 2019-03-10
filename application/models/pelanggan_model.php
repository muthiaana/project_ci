<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class pelanggan_model extends CI_Model {
	var $table = "pelanggan";

	function add($data){
		$this->db->insert($this->table,$data);

		if ($this->db->affected_rows()>0) {
			redirect('pelanggan/index');
		}
	}

	public function get_pelanggan(){
		$this->db->select('*')->from('pelanggan');
		$res = $this->db->get();
		
		return $res->result();
	}
}