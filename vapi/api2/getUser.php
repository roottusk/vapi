<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';


if(isset($_SERVER["HTTP_AUTH_KEY"])){

    $auth_key=mysqli_real_escape_string($dbconn, $_SERVER["HTTP_AUTH_KEY"]);

    $result=mysqli_query($dbconn,"SELECT name,address,city,country from api2users where token ='$auth_key'");        

    if(mysqli_num_rows($result)>0)
    {
        $row=$result->fetch_assoc();

        $row["success"]="true";

        print json_encode($row);
    }
    else{
        print json_encode(array("success"=>"false","msg"=>"User not found"));
    }


}
else{
    print json_encode(array("success"=>"false","msg"=>"Custom header Auth-Key not set"));
}