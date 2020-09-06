<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';

$requestAuth = new CustomHeaderAuth();


if($requestAuth->isHeaderSet())
{

    $query="SELECT id,username,name,address,mobileno from api5users WHERE username='".$requestAuth->getUsername()."' AND password='".$requestAuth->getPassword()."'";
    $result = mysqli_query($dbconn,$query);
    
    if(mysqli_num_rows($result)  > 0)
    {
        $row=$result->fetch_assoc();
        $row["success"]="true";
        print json_encode($row);

    }
    else{
        
        print json_encode(array("success"=>"false","cause"=>"usernameOrPasswordIncorrect"));
    }



}
else{
    print json_encode(array("success"=>"false","cause"=>"authHeaderNotSet"));
}




