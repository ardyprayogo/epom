<?php

class Model_pengajar extends CI_Model {

	public function get_pengajar_rows()
	{
		$query = $this->db->get('pengajar');
		return $query->num_rows();
	}

	public function get_pengajar()
	{
		$query = $this->db->get('pengajar');
		return $query->result_array();
	}

	public function get_one_pengajar($id)
	{
		$query = $this->db->get_where('pengajar', array('id_pengajar' => $id));
		return $query->row_array();
	}

	public function insert_pengajar()
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'tgllhr'		=> $this->input->post('tgllhr'),
			'email'			=> $this->input->post('email'),
			'jk'				=> $this->input->post('jk'),
			'agama'			=> $this->input->post('agama'),
			'almt'			=> $this->input->post('almt'),
			'pendidikan'=> $this->input->post('pend'),
			'notelp'		=> $this->input->post('notelp')
		);
		return $this->db->insert('pengajar', $data);
	}

	public function update_pengajar($id)
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'tgllhr'		=> $this->input->post('tgllhr'),
			'email'			=> $this->input->post('email'),
			'jk'				=> $this->input->post('jk'),
			'agama'			=> $this->input->post('agama'),
			'almt'			=> $this->input->post('almt'),
			'pendidikan'=> $this->input->post('pend'),
			'notelp'		=> $this->input->post('notelp')
		);
		$this->db->where('id_pengajar', $id);
		return $this->db->update('pengajar', $data);
	}

	public function delete_pengajar($id)
	{
		$this->db->where('id_pengajar', $id);
		return $this->db->delete('pengajar');
	}

}