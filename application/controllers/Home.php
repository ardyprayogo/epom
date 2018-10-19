<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		redirect(site_url('login'));
	}

	public function login()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'ID', 'required',
			array('required' => 'Periksa %s Anda kembali'));
		$this->form_validation->set_rules('pass', 'Password', 'required',
			array('required' => 'Periksa %s Anda kembali'));
		$this->form_validation->set_rules('status', 'Status', 'required',
			array('required' => 'Silahkan pilih salah satu sebagai %s Login Anda'));
		if($this->form_validation->run() === FALSE)
		{
			$data['title'] 		= 'EPOM | Home';
			$data['content'] 	= 'home';
			$this->load->view('template', $data);
		}
		else
		{
			$this->load->model('Model_master');
			$id 		= $this->input->post('id');
			$pass 	= md5($this->input->post('pass'));
			$status = $this->input->post('status');
			if($this->Model_master->get_login($status, $id, $pass) === 1)
			{
				$newdata = array(
	      'id'  			=> $id,
	      'logged_in' => TRUE,
	      'status'		=> $status
				);
				$this->session->set_userdata($newdata);
				switch ($status) 
				{
					case 'admin':
						redirect(site_url('admin'));
						break;
					case 'pengajar':
						redirect(site_url('pengajar'));
						break;
					case 'murid':
						redirect(site_url('murid'));
						break;
				}
			}
			else
			{
				redirect(site_url('login'));
			}

		}
		
	}

	public function about()
	{
		$data['title'] 		= 'EPOM | About';
		$data['content'] 	= 'about';
		$this->load->view('template', $data);
	}


}
