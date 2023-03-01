<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->model('user_model');
		$users = $this->user_model->findAll();
		$data = ['title' => 'Login', 'css' => ['style.css'], "users" => $users];
		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function confirm()
	{
		$userName = $_POST;
		$data = ['title' => 'Login', 'css' => ['style.css']];

		$this->load->model('user_model');
		$this->load->view('header', $data);
		if (array_key_exists("name", $userName)) {
			$result = iterator_to_array($this->user_model->findByName($userName["name"])[0]);
			$data["user"] = $result;
			$this->load->view('login_success', $data);
		} else {
			redirect();
		}
		$this->load->view('footer');
	}

	public function test()
	{
		$this->load->model('user_model');
		print "<pre>";
		print_r($this->user_model->findAll());
		print "</pre>";
	}
}
