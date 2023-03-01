<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('vendor/autoload.php');

class Db {

    function __construct() {
        $database = new \MongoDB\Client("mongodb://localhost:27017");
        $characters = $database->rickMortySeteDigital->characters;
        $users = $database->rickMortySeteDigital->users;
        if ($characters->countDocuments() == 0) {
            $dataRequest = json_decode(file_get_contents("https://rickandmortyapi.com/api/character"), true);
            $documents = [];
            foreach ($dataRequest['results'] as $character) {
                array_push($documents, $character);
            }
            $characters->insertMany($documents);
        }
    }

    public function findAll($collection) {
        $database = new \MongoDB\Client("mongodb://localhost:27017");
        return $database->rickMortySeteDigital->$collection->find();
    }

    public function findParam($collection, $param) {
        $database = new \MongoDB\Client("mongodb://localhost:27017");
        return $database->rickMortySeteDigital->$collection->find($param);
    }

    public function insertInto($collection, $data) {
        $database = new \MongoDB\Client("mongodb://localhost:27017");
        return $database->rickMortySeteDigital->$collection->insertOne($data);
    }
}
