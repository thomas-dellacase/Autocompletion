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

}