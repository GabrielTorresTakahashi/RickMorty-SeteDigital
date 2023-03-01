<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('character_model');
        $characters = $this->character_model->findAll();
        $data = ['title' => 'Início', 'css' => ['style.css'], "characters" => $characters];
        $this->load->view('header', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }
}
