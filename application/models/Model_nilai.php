<?php


class Model_nilai extends CI_Model {

	public function get_nilai_rows()
	{
		$query = $this->db->get('nilai');
		return $query->num_rows();
	}

	public function get_kuesioner($c)
	{
		$query = $this->db->query("select subkriteria.id_sub, subkriteria.id_kriteria, kriteria.kriteria, subkriteria.sub, subkriteria.ket
			from subkriteria join kriteria on subkriteria.id_kriteria = kriteria.id_kriteria where subkriteria.id_kriteria = '$c' order by subkriteria.id_kriteria");
		return $query->result_array();
	}

	public function get_kuesioner_rows($c)
	{
		$query = $this->db->query("select * from subkriteria where id_kriteria ='$c'");
		return $query->num_rows();
	}

	public function get_nilai()
	{
		$query = $this->db->query('select nilai.id_pengajar, pengajar.nama, avg(nilai.pedagogik) as c1, 
			avg(nilai.kepribadian) as c2, avg(nilai.sosial) as c3, avg(nilai.profesional) as c4,
			count(*) as penilai from nilai
			join pengajar on nilai.id_pengajar = pengajar.id_pengajar
			group by nilai.id_pengajar');
		return $query->result_array();
	}

	public function get_maxc1()
	{
		$query = $this->db->query('select max(c1)
		from (select avg(pedagogik) as c1,
		count(*) as penilai
		from nilai
		group by id_pengajar
		
		) tmp');
		return $query->row_array();
	}

	public function get_maxc2()
	{
		$query = $this->db->query('select max(c2)
		from (select avg(kepribadian) as c2,
		count(*) as penilai
		from nilai
		group by id_pengajar
		
		) tmp');
		return $query->row_array();
	}

	public function get_maxc3()
	{
		$query = $this->db->query('select max(c3)
		from (select avg(sosial) as c3,
		count(*) as penilai
		from nilai
		group by id_pengajar
		
		) tmp');
		return $query->row_array();
	}

	public function get_maxc4()
	{
		$query = $this->db->query('select max(c4)
		from (select avg(profesional) as c4,
		count(*) as penilai
		from nilai
		group by id_pengajar
		
		) tmp');
		return $query->row_array();
	}

	public function get_bobot_c1()
	{
		$query = $this->db->query("select bobot from kriteria where id_kriteria ='c1'");
		return $query->row_array();
	}

	public function get_bobot_c2()
	{
		$query = $this->db->query("select bobot from kriteria where id_kriteria ='c2'");
		return $query->row_array();
	}

	public function get_bobot_c3()
	{
		$query = $this->db->query("select bobot from kriteria where id_kriteria ='c3'");
		return $query->row_array();
	}

	public function get_bobot_c4()
	{
		$query = $this->db->query("select bobot from kriteria where id_kriteria ='c4'");
		return $query->row_array();
	}

	public function get_report($c1, $bc1, $c2, $bc2, $c3, $bc3, $c4, $bc4)
	{
		$query = $this->db->query("SELECT nilai.id_pengajar, pengajar.nama, (avg(nilai.pedagogik)/$c1)*$bc1 as c1, 
			(avg(nilai.kepribadian)/$c2)*$bc2 as c2, (avg(nilai.sosial)/$c3)*$bc3 as c3, (avg(nilai.profesional)/$c4)*$bc4 as c4,
			((avg(nilai.pedagogik)/$c1)*$bc1)+((avg(nilai.kepribadian)/$c2)*$bc2)+((avg(nilai.sosial)/$c3)*$bc3)+
			((avg(nilai.profesional)/$c4)*$bc4) as total,
			count(*) as penilai from nilai
			join pengajar on nilai.id_pengajar = pengajar.id_pengajar
			group by nilai.id_pengajar
			order by total DESC");
		return $query->result_array();
	}

}