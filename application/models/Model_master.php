<?php

class Model_master extends CI_Model {

	public function get_login($status, $id, $pass)
	{
		$query = $this->db->query("SELECT * FROM $status WHERE id_$status = '$id' AND password = '$pass'");
		return $query->num_rows();
	}

}