<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_pengajar');
	  	$this->load->model('Model_murid');
	  	$this->load->model('Model_nilai');
	  	$data['jmlp']		= $this->Model_pengajar->get_pengajar_rows();
	  	$data['jmlm']		= $this->Model_murid->get_murid_rows();
	  	$data['jmln']		= $this->Model_nilai->get_nilai_rows();
			$data['title'] 	= 'EPOM | Dashboard Admin';
			$data['content']= 'admin/dashboard';
			$data['page']		= 'dashboard';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function pengajar()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_pengajar');
	  	$data['result']	= $this->Model_pengajar->get_pengajar();
			$data['title'] 	= 'EPOM | Data Pengajar';
			$data['content']= 'admin/view_pengajar';
			$data['page']		= 'pengajar';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function input_pengajar()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama', 'Nama', 'required',
				array('required' 		=> 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('tgllhr', 'Tanggal Lahir', 'required',
				array('required' 		=> 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
				array('required' 		=> 'Harap periksa %s Anda kembali.', 
							'valid_email' => 'Harap masukan %s yang valid.'));
			$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required',
				array('required'		=> 'Harap pilih salah satu.'));
			$this->form_validation->set_rules('agama', 'Agama', 'required',
				array('required'		=> 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('almt', 'Alamat', 'required',
				array('required'		=> 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('pend', 'Pendidikan', 'required',
				array('required'		=> 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('notelp', 'Nomor Telpon', 'required',
				array('required'		=> 'Harap periksa %s Anda kembali.'));
			if($this->form_validation->run() === FALSE)
			{
				$data['title'] 	= 'EPOM | Input Pengajar';
				$data['content']= 'admin/input_pengajar';
				$data['page']		= 'pengajar';
				$this->load->view('admin/template', $data);
			}
			else
			{
				$this->load->model('Model_pengajar');
				$this->Model_pengajar->insert_pengajar();
				redirect(site_url('admin/pengajar'));
			}
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function update_pengajar($id)
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
	    $this->load->model('Model_pengajar');
			$this->form_validation->set_rules('nama', 'Nama', 'required', 
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('tgllhr', 'Tanggal Lahir', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
				array('required' => 'Harap periksa %s Anda kembali.',
							'valid_email' => 'Harap masukkan %s yang valid.'));
			$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required',
				array('required'		=> 'Harap pilih salah satu.'));
			$this->form_validation->set_rules('agama', 'Agama', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('almt', 'Alamat', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('pend', 'Pendidikan', 'required',
				array('required'		=> 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('notelp', 'Nomor Telpon', 'required',
				array('required'		=> 'Harap periksa %s Anda kembali.'));
			if ($this->form_validation->run() === FALSE)
	    {
	    	$data['result']	= $this->Model_pengajar->get_one_pengajar($id);
				$data['title'] 	= 'EPOM | Data Pengajar';
				$data['content']= 'admin/update_pengajar';
				$data['page']		= 'pengajar';		
				$this->load->view('admin/template', $data);
	    }
	    else
	    {
	      $this->Model_pengajar->update_pengajar($id);
	      redirect(site_url('admin/pengajar'));
	   	}
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function delete_pengajar($id)
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_pengajar');
			$this->Model_pengajar->delete_pengajar($id);
			redirect(site_url('admin/pengajar'));
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function murid()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_murid');
			$data['title']		= 'EPOM | Data Murid';
			$data['content']	= 'admin/view_murid';
			$data['page']			= 'murid';
			$data['result']		= $this->Model_murid->get_murid();
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url('login'));
		}
		
	}

	public function input_murid()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama', 'Nama', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('tgllhr', 'Tanggal Lahir', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
				array('required' => 'Harap periksa %s Anda kembali.',
							'valid_email' => 'Harap masukkan %s yang valid.'));
			$this->form_validation->set_rules('pass', 'Password', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required',
				array('required'		=> 'Harap pilih salah satu.'));
			$this->form_validation->set_rules('agama', 'Agama', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('almt', 'Alamat', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('tingkat', 'Tingkat', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('notelp', 'Nomor Telpon', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			if($this->form_validation->run() === FALSE)
			{
				$data['title']		= 'EPOM | Input Murid';
				$data['content']	= 'admin/input_murid';
				$data['page']			= 'murid';
				$this->load->view('admin/template', $data);
			}
			else
			{
				$this->load->model('Model_murid');
				$this->Model_murid->insert_murid();
				redirect(site_url('admin/murid'));
			}
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function update_murid($id)
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('Model_murid');
			$this->form_validation->set_rules('nama', 'Nama', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('tgllhr', 'Tanggal Lahir', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
				array('required' => 'Harap periksa %s Anda kembali.',
							'valid_email' => 'Harap masukkan %s yang valid.'));
			$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required',
				array('required'		=> 'Harap pilih salah satu.'));
			$this->form_validation->set_rules('agama', 'Agama', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('almt', 'Alamat', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('tingkat', 'Tingkat', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			$this->form_validation->set_rules('notelp', 'Nomor Telpon', 'required',
				array('required' => 'Harap periksa %s Anda kembali.'));
			if($this->form_validation->run() === FALSE)
			{
				$data['result']		= $this->Model_murid->get_one_murid($id);
				$data['title']		= 'EPOM | Update Murid';
				$data['content']	= 'admin/update_murid';
				$data['page']			= 'murid';
				$this->load->view('admin/template', $data);
			}
			else
			{
				$this->Model_murid->update_murid($id);
	      redirect(site_url('admin/murid'));
			}
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function delete_murid($id)
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_murid');
			$this->Model_murid->delete_murid($id);
			redirect(site_url('admin/murid'));
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function kriteria()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_kriteria');
			$data['result']		= $this->Model_kriteria->get_kriteria();
			$data['title']		= 'EPOM | Kriteria';
			$data['content']	= 'admin/view_kriteria';
			$data['page']			= 'kriteria';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url('login'));
		}	
	}


	public function update_kriteria($id)
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('Model_kriteria');
			$this->form_validation->set_rules('bobot', 'Bobot', 'required',
				array('required' => 'Harap periksa kembali %s Anda.'));
			if($this->form_validation->run() === FALSE)
			{
				$data['result']		= $this->Model_kriteria->get_one_kriteria($id);
				$data['title']		= 'EPOM | Update Kriteria';
				$data['content']	= 'admin/update_kriteria';
				$data['page']			= 'kriteria';
				$this->load->view('admin/template', $data);
			}
			else
			{
				$this->Model_kriteria->update_kriteria($id);
				redirect(site_url('admin/kriteria'));
			}
		}
		else
		{
			redirect(site_url('login'));
		}
		
	}

	public function penilaian()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_nilai');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$data['result']		= $this->Model_nilai->get_nilai();
			$data['title']		= 'EPOM | Penilaian';
			$data['content']	= 'admin/view_penilaian';
			$data['page']			= 'penilaian';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url('login'));
		}	
	}

	public function subkriteria()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_kriteria');
			$data['result']		= $this->Model_kriteria->get_subkriteria();
			$data['title']		= 'EPOM | Sub Kriteria';
			$data['content']	= 'admin/view_subkriteria';
			$data['page']			= 'kriteria';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url('login'));
		}
		
	}

	public function input_subkriteria()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('kriteria', 'Kriteria', 'required',
				array('required' => 'Harap periksa kembali %s Anda.'));
			$this->form_validation->set_rules('subkriteria', 'Sub Kriteria', 'required',
				array('required' => 'Harap periksa kembali %s Anda.'));
			$this->form_validation->set_rules('ket', 'Keterangan', 'required',
				array('required' => 'Harap periksa kembali %s Anda.'));
			if($this->form_validation->run() === FALSE)
			{
				$data['title']		= 'EPOM | Input Sub Kriteria';
				$data['content']	= 'admin/input_subkriteria';
				$data['page']			= 'kriteria';
				$this->load->view('admin/template', $data);
			}
			else
			{
				$this->load->model('Model_kriteria');
				$this->Model_kriteria->input_subkriteria();
				redirect(site_url('admin/subkriteria'));
			}
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function update_subkriteria($id)
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('Model_kriteria');

			$this->form_validation->set_rules('kriteria', 'Kriteria', 'required',
				array('required' => 'Harap periksa kembali %s Anda.'));
			$this->form_validation->set_rules('subkriteria', 'Sub Kriteria', 'required',
				array('required' => 'Harap periksa kembali %s Anda.'));
			$this->form_validation->set_rules('ket', 'Keterangan', 'required',
				array('required' => 'Harap periksa kembali %s Anda.'));
			if($this->form_validation->run() === FALSE)
			{
				$data['result']		= $this->Model_kriteria->get_one_subkriteria($id);
				$data['title']		= 'EPOM | Update Sub Kriteria';
				$data['content']	= 'admin/update_subkriteria';
				$data['page']			= 'kriteria';
				$this->load->view('admin/template', $data);
			}
			else
			{
				$this->Model_kriteria->update_subkriteria($id);
				redirect(site_url('admin/subkriteria'));
			}
		}
		else
		{
			redirect(site_url('login'));
		}
		
	}

	public function delete_subkriteria($id)
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_kriteria');
			$this->Model_kriteria->delete_subkriteria($id);
			redirect(site_url('admin/subkriteria'));
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function laporan()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_nilai');

			$data['bobotc1'] = $this->Model_nilai->get_bobot_c1();
			$data['bobotc2'] = $this->Model_nilai->get_bobot_c2();
			$data['bobotc3'] = $this->Model_nilai->get_bobot_c3();
			$data['bobotc4'] = $this->Model_nilai->get_bobot_c4();
			$bc1 = $data['bobotc1']['bobot'];
			$bc2 = $data['bobotc2']['bobot'];
			$bc3 = $data['bobotc3']['bobot'];
			$bc4 = $data['bobotc4']['bobot'];
			$data['maxc1']		= $this->Model_nilai->get_maxc1();
			$data['maxc2']		= $this->Model_nilai->get_maxc2();
			$data['maxc3']		= $this->Model_nilai->get_maxc3();
			$data['maxc4']		= $this->Model_nilai->get_maxc4();
			$c1 = $data['maxc1']['max(c1)'];
			$c2 = $data['maxc2']['max(c2)'];
			$c3 = $data['maxc3']['max(c3)'];
			$c4 = $data['maxc4']['max(c4)'];
			$data['result']		= $this->Model_nilai->get_report($c1, $bc1, $c2, $bc2, $c3, $bc3, $c4, $bc4);
			$data['title']		= 'EPOM | Laporan';
			$data['content']	= 'admin/view_laporan';
			$data['page']			= 'laporan';
			$this->load->view('admin/template', $data);
		}
		else
		{
			redirect(site_url('login'));
		}
	}

	public function cetak_laporan()
	{
		if($this->session->userdata('logged_in') === TRUE && $this->session->userdata('status') === 'admin')
		{
			$this->load->model('Model_nilai');

			$data['bobotc1'] = $this->Model_nilai->get_bobot_c1();
			$data['bobotc2'] = $this->Model_nilai->get_bobot_c2();
			$data['bobotc3'] = $this->Model_nilai->get_bobot_c3();
			$data['bobotc4'] = $this->Model_nilai->get_bobot_c4();
			$bc1 = $data['bobotc1']['bobot'];
			$bc2 = $data['bobotc2']['bobot'];
			$bc3 = $data['bobotc3']['bobot'];
			$bc4 = $data['bobotc4']['bobot'];
			$data['maxc1']		= $this->Model_nilai->get_maxc1();
			$data['maxc2']		= $this->Model_nilai->get_maxc2();
			$data['maxc3']		= $this->Model_nilai->get_maxc3();
			$data['maxc4']		= $this->Model_nilai->get_maxc4();
			$c1 = $data['maxc1']['max(c1)'];
			$c2 = $data['maxc2']['max(c2)'];
			$c3 = $data['maxc3']['max(c3)'];
			$c4 = $data['maxc4']['max(c4)'];
			$data['result']		= $this->Model_nilai->get_report($c1, $bc1, $c2, $bc2, $c3, $bc3, $c4, $bc4);
			$data['title']		= 'Laporan_'.date('dmY');
			$this->load->view('admin/cetak_laporan', $data);
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