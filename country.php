<?php
require 'db.php';

class Country{
    function __construct(){
        $this->db=connect();
    }

    function showCountry($id){
        $showCountry = $this->db->prepare("SELECT * FROM country WHERE id = :id");
        $showCountry->execute(array('id' => $id));
        $show = $showCountry->fetchAll(PDO::FETCH_ASSOC);
        return $show;
    }
    function shearchCountry($shearch){
        $shearchCountry = $this->db->prepare("SELECT * FROM country WHERE name LIKE '$shearch%'");
        $shearchCountry->execute();
        $shearch = $shearchCountry->fetchAll(PDO::FETCH_ASSOC);
        return $shearch;
    }
    function shearchCountry2($shearch){
        $shearchCountry2 = $this->db->prepare("SELECT * FROM country WHERE name LIKE '%$shearch%' AND name NOT LIKE '$shearch%'");
        $shearchCountry2->execute();
        $shearch2 = $shearchCountry2->fetchAll(PDO::FETCH_ASSOC);
        return $shearch2;
    }

}