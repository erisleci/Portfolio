<?php

require_once "./models/contactMeModel.php";

class contactMe {
    public $contactMeModel;
    public $message = "";


    function __construct() {
        $this->contactMeModel = new contactModel();
    }

    function insert($request) {
        if($request['name'] === "" || $request['email'] === ""|| $request['message'] === "") {
            $this->message = "All fields must be filled";
            return;
        }
        if(!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
            $this->message = 'Wrong email format';
            
            return;
            
        }


        if($this->message === "") {
            $this->message = "message sent successfully!";
            $this->contactMeModel->insertMessage($request);
            
        }
    }

}