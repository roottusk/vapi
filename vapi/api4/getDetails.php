<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';

if(isset($_SERVER["HTTP_AUTH_KEY"]))
{
    if($_SERVER["HTTP_AUTH_KEY"]==$API4_KEY)
    {
        http_response_code(200);
        print json_encode(array("success"=>"true","username"=>"admin","firstname"=>"John","lastname"=>base64_decode("ZmxhZ3thcGk0X2NlNjk2MjM5MzIzZWE1YjJkMDE1fQ==")));
    }
    else{
        http_response_code(401);
        print json_encode(array("success"=>"false","cause"=>"Invalid Auth-Key"));
    }

}
else{
    http_response_code(401);
    print json_encode(array("success"=>"false","cause"=>"Header Auth-Key not Provided"));
}