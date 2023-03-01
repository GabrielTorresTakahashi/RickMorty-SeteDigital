<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$data = ['title' => 'Login', 'css' => ['style.css']];
		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function success()
	{
		$data = ['title' => 'Login', 'css' => ['style.css']];
		$this->load->view('header', $data);
		$this->load->view('login_success');
		$this->load->view('footer');
	}
}
