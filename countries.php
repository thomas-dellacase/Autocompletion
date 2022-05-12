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
        echo json_encode($select, JSON_FORCE_OBJECT);

    }

}
$select = new Countries;
$select->selectCountry();
?>