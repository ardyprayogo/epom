<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'murid')
		{
			$data['title'] 	= 'EPOM | Dashboard Murid';
			$data['content']= 'murid/dashboard';
			$data['page']		= 'dashboard';
			$this->load->model('Model_murid');
			$id = $this->session->userdata('id');
			$data['status']	= $this->Model_murid->get_status($id);
			$data['murid']	= $this->Model_murid->get_one_murid($id);
			$this->load->view('murid/template', $data);
		}
		else
		{
			redirect(site_url('login'));
		}
		
	}

	public function penilaian()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'murid')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('Model_nilai');
			$this->load->model('Model_pengajar');
			$rowsc1 =  $this->Model_nilai->get_kuesioner_rows('c1');
			$rowsc2 =  $this->Model_nilai->get_kuesioner_rows('c2');
			$rowsc3 =  $this->Model_nilai->get_kuesioner_rows('c3');
			$rowsc4 =  $this->Model_nilai->get_kuesioner_rows('c4');
			$no=0;
			$this->form_validation->set_rules('id_pengajar', 'Pengajar', 'required',
				array('required' => 'Silahkan pilih %s.'));
			while ( $no < $rowsc1) 
				{
					$this->form_validation->set_rules('c1s'.$no, 'Kuesioner', 'required',
						array('required' => 'Harap pilih salah satu.'));
					$no++;
				}
			$no=0;
			while ( $no < $rowsc2) 
				{
					$this->form_validation->set_rules('c2s'.$no, 'Kuesioner', 'required',
						array('required' => 'Harap pilih salah satu.'));
					$no++;
				}
			$no=0;
			while ( $no < $rowsc3) 
				{
					$this->form_validation->set_rules('c3s'.$no, 'Kuesioner', 'required',
						array('required' => 'Harap pilih salah satu.'));
					$no++;
				}
			$no=0;
			while ( $no < $rowsc4) 
				{
					$this->form_validation->set_rules('c4s'.$no, 'Kuesioner', 'required',
						array('required' => 'Harap pilih salah satu.'));
					$no++;
				}
			if($this->form_validation->run() === FALSE)
			{
				$data['result_c1']	= $this->Model_nilai->get_kuesioner('c1');
				$data['result_c2']	= $this->Model_nilai->get_kuesioner('c2');
				$data['result_c3']	= $this->Model_nilai->get_kuesioner('c3');
				$data['result_c4']	= $this->Model_nilai->get_kuesioner('c4');
				$data['pengajar']		= $this->Model_pengajar->get_pengajar();
				$data['title'] 			= 'EPOM | Penilaian Pengajar';
				$data['content']		= 'murid/penilaian';
				$data['page']				= 'penilaian';
				$this->load->view('murid/template', $data);
			}
			else
			{

				$no = 0;
				while ( $no < $rowsc1) 
				{
					$totalc1[$no] = $this->input->post('c1s'.$no);
					$no++;
				}
				$no = 0;
				while ( $no < $rowsc2) 
				{
					$totalc2[$no] = $this->input->post('c2s'.$no);
					$no++;
				}
				$no = 0;
				while ( $no < $rowsc3) 
				{
					$totalc3[$no] = $this->input->post('c3s'.$no);
					$no++;
				}
				$no = 0;
				while ( $no < $rowsc4) 
				{
					$totalc4[$no] = $this->input->post('c4s'.$no);
					$no++;
				}
				$ratac1 = array_sum($totalc1)/$rowsc1;
				$ratac2 = array_sum($totalc2)/$rowsc2;
				$ratac3 = array_sum($totalc3)/$rowsc3;
				$ratac4 = array_sum($totalc4)/$rowsc4;

				$data = array(
				'id_murid' 		=> $this->session->userdata('id'),
				'tgl'					=> date('Y-m-d'),
				'id_pengajar' => $this->input->post('id_pengajar'),
				'pedagogik' 	=> $ratac1,
				'kepribadian' => $ratac2,
				'sosial' 			=> $ratac3,
				'profesional' => $ratac4
				);
				$this->db->insert('nilai', $data);
				redirect(site_url('murid'));
			}
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function logout()
	{
		$newdata = array('id', 'logged_in', 'status');
		$this->session->unset_userdata($newdata);
		redirect(site_url('login'));
	}

}
