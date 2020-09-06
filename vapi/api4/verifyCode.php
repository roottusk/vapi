<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';


if(isset($_POST["otp"]))
{   
    $otp=$_POST["otp"];

    if(is_numeric($otp) && strlen($otp))
    {
        if($otp==$API4_OTP)
        {
            http_response_code(200);
            print json_encode(array("success"=>"true","key"=>$API4_KEY));
        }
        else{
            http_response_code(401);
            print json_encode(array("success"=>"false","cause"=>"Invalid OTP"));
        }

    }
    else{
        http_response_code(401);
        print json_encode(array("success"=>"false","cause"=>"Invalid OTP"));
    }
}
else{
    http_response_code(401);
    print json_encode(array("success"=>"false","cause"=>"otp not Provided"));
}