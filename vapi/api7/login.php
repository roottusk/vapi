<?php
session_start();

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';

if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username=mysqli_real_escape_string($dbconn,$_POST["username"]);
    $password=mysqli_real_escape_string($dbconn,$_POST["password"]);

    $query="SELECT * from api7users where username='$username' and password='$password'";

    $result=mysqli_query($dbconn,$query);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION["uname"]=$username;
        http_response_code(200);
        print json_encode(array("loginsuccess"=>"true","msg"=>"User logged in"));
    }
    else{
        http_response_code(401);
        print json_encode(array("loginsuccess"=>"false","cause"=>"Username or Password incorrect"));
    }

}
else{

    http_response_code(401);
    print json_encode(array("loginsuccess"=>"false","cause"=>"Username or Password not provided"));

}