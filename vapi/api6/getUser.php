<?php

require 'User.php';
require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';

$requestAuth = new CustomHeaderAuth();


if($requestAuth->isHeaderSet())
{
    $query="SELECT name,username,credit from api6users WHERE username='".$requestAuth->getUsername()."' AND password='".$requestAuth->getPassword()."'";
    $result = mysqli_query($dbconn,$query);
    
    if(mysqli_num_rows($result)  > 0)
    {
        $row=$result->fetch_assoc();
        $row["success"]="true";
        if(isset($row["credit"]))
            if((int)$row["credit"] >=100)
                $row["flag"]=base64_decode("ZmxhZ3thcGk2X2FmYjk2OWRiOGI2ZTI3MjY5NGI0fQ==");


        print json_encode($row);
    }
    else{
        print json_encode(array("success"=>"false","cause"=>"Username or Password incorrect"));
    }

}
else{
    print json_encode(array("success"=>"false","cause"=>" Custom Header Authorization-Token not set"));
}