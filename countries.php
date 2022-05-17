<?php
require 'db.php';

class Countries{
    function __construct(){
        $this->db=connect();
    }
    function selectCountry(){
        $selectCountry = $this->db->prepare("SELECT * FROM country");
        $selectCountry->execute();
        $select = $selectCountry->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($select);

    }
    function showCountry($id){
        $showCountry = $this->db->prepare("SELECT * FROM country WHERE id = :id");
        $showCountry->execute(array('id' => $id));
        $show = $showCountry->fetchAll(PDO::FETCH_ASSOC);
        return $show;
    }

}
$select = new Countries;
$select->selectCountry();
?>