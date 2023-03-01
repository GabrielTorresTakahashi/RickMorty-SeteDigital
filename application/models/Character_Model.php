<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Character_Model extends CI_Model
{

    function __construct()
    {
        $this->load->library('db');
    }

    public function index()
    {
        return $this->load->library('db');
    }

    public function save($user)
    {
        return $this->db->insertInto('characters', $user);
    }

    public function findAll()
    {
        return $this->db->findAll('characters')->toArray();
    }

    public function findByName($name)
    {
        return $this->db->findParam("characters",["name" => $name])->toArray();
    }
}
