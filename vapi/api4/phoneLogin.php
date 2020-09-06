<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';


if(isset($_POST["mobileno"]))
{
    $mobileno=$_POST["mobileno"];

    if(is_numeric($mobileno) && strlen($mobileno)==10 )
    {
        print json_encode(array("success"=>"true","msg"=>"4 Digit OTP sent on mobile no."));

    }
    else{
        print json_encode(array("success"=>"false","cause"=>"Invalid mobileno "));
    }
 
}
else{
    print json_encode(array("success"=>"false","cause"=>"mobileno not Provided"));
}