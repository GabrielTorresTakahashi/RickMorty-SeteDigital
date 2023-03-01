<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	public function index()
	{
		$data = ['title'=>'Cadastro', 'css' => ['style.css']];
		$this->load->view('header',$data);
		$this->load->view('signup');
		$this->load->view('footer');
	}
}
