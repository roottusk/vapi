<?php

namespace App\CustomClasses;

class CustomHeaderAuth{

    private $headerstr,$username,$password;

    private $authstring= array();

    function __construct($headerstr){
        $this->headerstr=base64_decode($headerstr);
        $this->authstring=explode(":",$this->headerstr);
        $this->username=$this->authstring[0];
        $this->password=$this->authstring[1];
    }

    function getUsername(){
        return $this->username;
    }

    function getPassword(){
        return $this->password;
    }


}
