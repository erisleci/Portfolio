<?php

class DBCon {
    public function getConnection()
    {
        // inicojme koneksionin me db
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=portfolio", "root", "");
        }catch(PDOException $pdo){
            die("DB connection failed!");
        }

        return $pdo;
    }

}