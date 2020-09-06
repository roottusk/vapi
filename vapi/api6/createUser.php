<?php

require 'User.php';
require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';


function validateAll()
{
    if(isset($_POST["username"]))
        if(isset($_POST["name"]))
            if(isset($_POST["password"]))
                return true;
            else
                return false;
        else 
            return false;
    else
        return false;
}

if(validateAll()){

    $user = new User($_POST);

    if($user->addToDB()){
        print json_encode(array("status"=>200,"userCreated"=>"true"));
    }
    else{
        print json_encode(array("status"=>400,"userCreated"=>"false","cause"=>"unable to create user"));
    }

}
else{
    print json_encode(array("status"=>400,"userCreated"=>"false","cause"=>"parameters not enough"));
}