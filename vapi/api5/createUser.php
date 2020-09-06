<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';


function validateAll()
{
    if(isset($GLOBALS["username"]))
        if(isset($GLOBALS["name"]))
            if(isset($GLOBALS["address"]))
                if(isset($GLOBALS["password"]))
                    if(isset($GLOBALS["mobileno"]))
                        return true;
                    else
                        return false;
                else
                    return false;
            else
                return false;
        else 
            return false;
    else
        return false;
}

$username   =  $_POST["username"];
$name   =  $_POST["name"];
$address =    $_POST["address"];
$password   =  $_POST["password"];
$mobileno  =  $_POST["mobileno"];

if(validateAll()){

    $username=mysqli_real_escape_string($dbconn,$username);
    $name=mysqli_real_escape_string($dbconn,$name);
    $address=mysqli_real_escape_string($dbconn,$address);
    $password=mysqli_real_escape_string($dbconn,$password);
    $mobileno=mysqli_real_escape_string($dbconn,$mobileno);


    $query="INSERT into api5users values('','$username','$password','$name','$address','$mobileno')";

    if(mysqli_query($dbconn,$query)){
        $latest_id=mysqli_insert_id($dbconn);
        print json_encode(array("status"=>200,"userCreated"=>"true","userId"=>$latest_id));
    }
    else{
        print json_encode(array("status"=>400,"userCreated"=>"false","cause"=>"dbInsertionFailed"));
    }
}
else{
    print json_encode(array("status"=>400,"userCreated"=>"false","cause"=>"parameters"));
}