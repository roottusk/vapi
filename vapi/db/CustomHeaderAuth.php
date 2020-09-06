<?php

class CustomHeaderAuth{

    private $headerstr,$username,$password;

    private $authstring= array();

    function __construct(){
        $this->headerstr=base64_decode($_SERVER['HTTP_AUTHORIZATION_TOKEN']);
        $this->authstring=explode(":",$this->headerstr);
        $this->username=$this->authstring[0];
        $this->password=$this->authstring[1];
    }

    function isHeaderSet(){
        if(isset($_SERVER['HTTP_AUTHORIZATION_TOKEN']) && $_SERVER['HTTP_AUTHORIZATION_TOKEN']!="")
            return true;
        else
            return false;
    }

    function getUsername(){
        return $this->username;
    }

    function getPassword(){
        return $this->password;
    }

}