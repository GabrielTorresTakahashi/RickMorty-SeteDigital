<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyDb
{
    function __construct()
    {
        $database = new \MongoDB\Client("mongodb://localhost:27017");
        $dataRequest = file_get_contents("https://rickandmortyapi.com/api/character");
        $charactersData = 
        $characters = $database->rickMortySeteDigital->characters;
        $characters->insertMany($data)
    }
}
