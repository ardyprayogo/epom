<?php


class Model_murid extends CI_Model {

	public function get_murid_rows()
	{
		$query = $this->db->get('murid');
		return $query->num_rows();
	}

	public function get_murid()
	{
		$query = $this->db->get('murid');
		return $query->result_array();
	}

	public function get_one_murid($id)
	{
		$query = $this->db->get_where('murid', array('id_murid' => $id));
		return $query->row_array();
	}

	public function insert_murid()
	{
		$data = array(
			'nama' 		=> $this->input->post('nama'),
			'tgllhr'	=> $this->input->post('tgllhr'),
			'email'		=> $this->input->post('email'),
			'password'=> md5($this->input->post('pass')),
			'jk'			=> $this->input->post('jk'),
			'agama'		=> $this->input->post('agama'),
			'almt'		=> $this->input->post('almt'),
			'tingkat'	=> $this->input->post('tingkat'),
			'notelp'	=> $this->input->post('notelp')
		);
		return $this->db->insert('murid', $data);
	}

	public function update_murid($id)
	{
		$data = array(
			'nama' 		=> $this->input->post('nama'),
			'tgllhr'	=> $this->input->post('tgllhr'),
			'email'		=> $this->input->post('email'),
			'jk'			=> $this->input->post('jk'),
			'agama'		=> $this->input->post('agama'),
			'almt'		=> $this->input->post('almt'),
			'tingkat'	=> $this->input->post('tingkat'),
			'notelp'	=> $this->input->post('notelp')
		);
		$this->db->where('id_murid', $id);
		return $this->db->update('murid', $data);
	}

	public function delete_murid($id)
	{
		$this->db->where('id_murid', $id);
		return $this->db->delete('murid');
	}

	public function get_status($id)
	{
		$query	= $this->db->query("SELECT nilai.tgl, nilai.id_murid, nilai.id_pengajar, pengajar.nama 
																FROM nilai JOIN pengajar ON nilai.id_pengajar = pengajar.id_pengajar
																WHERE nilai.id_murid = $id ORDER BY nilai.tgl DESC");
		return $query->result_array();
	}

}