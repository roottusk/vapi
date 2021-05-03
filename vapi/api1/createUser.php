<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';


function validateAll()
{
    if(isset($GLOBALS["username"]))
        if(isset($GLOBALS["name"]))
            if(isset($GLOBALS["course"]))
                if(isset($GLOBALS["password"]))
                    return true;
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
$course =    $_POST["course"];
$password   =  $_POST["password"];

if(validateAll()){

    $username=mysqli_real_escape_string($dbconn,$username);
    $name=mysqli_real_escape_string($dbconn,$name);
    $course=mysqli_real_escape_string($dbconn,$course);
    $password=mysqli_real_escape_string($dbconn,$password);

    $query="INSERT into api1users (username, name, course, password) values ('$username','$name','$course','$password')";

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
