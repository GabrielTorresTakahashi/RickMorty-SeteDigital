<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{

    function __construct()
    {
        $this->load->library('db');
    }

    public function index()
    {
        return $this->load->library('db');
    }

    public function save(array $user)
    {
        return $this->db->insertInto('users', $user);
    }

    public function findAll()
    {
        return $this->db->findAll('users')->toArray();
    }

    public function findByName($name)
    {
        return $this->db->findParam("users",["name" => $name])->toArray();
    }
}
