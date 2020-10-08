<?php

include_once 'DBConnection.php';

class contactModel {
    private $DBCon;
    private $stm;

    function __construct() {
        $this->DBCon = new DBCon();
        $this->stm = $this->DBCon->getConnection();
    }

    function insertMessage($request) {
        $query = "INSERT into contact(name,email,message) values(:name, :email , :message)";
        $statement = $this->stm->prepare($query);
        $statement->bindparam(":name", $request['name']);
        $statement->bindparam(":email", $request['email']);
        $statement->bindparam(":message", $request['message']);
        $statement->execute();
    }
}


