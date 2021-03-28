<?php
session_start();

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';  



if(isset($_SESSION["uname"]) && $_SESSION["uname"]!="")
{
    $username=$_SESSION["uname"];


    if($_SERVER["HTTP_ORIGIN"]=="")
    {
        header("Access-Control-Allow-Origin: *");
    }
    else{
        header("Access-Control-Allow-Origin: ".$_SERVER["HTTP_ORIGIN"]);
        $row["flag"]=base64_decode("ZmxhZ3thcGk3X2U3MWI2NTA3MTY0NWUyNGVkNTBhfQ==");
    }
    
    header("Access-Control-Allow-Credentials: true");
    
    $query="SELECT username,authkey from api7users WHERE username='$username'";

    $result=mysqli_query($dbconn,$query);

    if(mysqli_num_rows($result) > 0)
    {
        http_response_code(200);
        $row=$result->fetch_assoc();
        $row["success"]="true";
        print json_encode($row);
    }
    else{
        http_response_code(401);
        print json_encode(array("loginsuccess"=>"false","cause"=>"User not found"));
    }

}
else{
    http_response_code(401);
    print json_encode(array("loginsuccess"=>"false","cause"=>"Please Login first"));
}