<?php


class Model_kriteria extends CI_Model {

	public function get_kriteria()
	{
		$query = $this->db->get('kriteria');
		return $query->result_array();
	}

	public function get_one_kriteria($id)
	{
		$query = $this->db->get_where('kriteria', array('id_kriteria' => $id));
		return $query->row_array();
	}

	public function update_kriteria($id)
	{
		$data = array(
			'bobot'				=> $this->input->post('bobot')
		);
		$this->db->where('id_kriteria', $id);
		return $this->db->update('kriteria', $data);
	}

	public function get_subkriteria()
	{
		$query = $this->db->query('select subkriteria.id_sub, kriteria.kriteria, subkriteria.sub, subkriteria.ket
			from subkriteria join kriteria on subkriteria.id_kriteria = kriteria.id_kriteria order by subkriteria.id_kriteria');
		return $query->result_array();
	}

	public function input_subkriteria()
	{
		$data = array(
			'id_kriteria'	=> $this->input->post('kriteria'),
			'sub'					=> $this->input->post('subkriteria'),
			'ket'					=> $this->input->post('ket')
		);
		return $this->db->insert('subkriteria', $data);
	}

	public function get_one_subkriteria($id)
	{
		$query = $this->db->get_where('subkriteria', array('id_sub' => $id));
		return $query->row_array();
	}

	public function update_subkriteria($id)
	{
		$data = array(
			'id_kriteria'	=> $this->input->post('kriteria'),
			'sub'					=> $this->input->post('subkriteria'),
			'ket'					=> $this->input->post('ket')
		);
		$this->db->where('id_sub', $id);
		return $this->db->update('subkriteria', $data);
	}

	public function delete_subkriteria($id)
	{
		$this->db->where('id_sub', $id);
		return $this->db->delete('subkriteria');
	}

}