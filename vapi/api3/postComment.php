<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';

$deviceid=mysqli_real_escape_string($dbconn,$_POST["deviceid"]);
$latitude=mysqli_real_escape_string($dbconn,$_POST["latitude"]);
$longitude=mysqli_real_escape_string($dbconn,$_POST["longitude"]);
$commenttext=mysqli_real_escape_string($dbconn,$_POST["commenttext"]);
$username=mysqli_real_escape_string($dbconn,$_POST["username"]);

$query="INSERT into comments values('',1,'$deviceid','$latitude','$longitude','$commenttext','$username') ";

$result=mysqli_query($dbconn,$query);

if($result)
{
    http_response_code(200);

    print json_encode(array("success"=>"true","comment"=>"posted"));
}
else{
    http_response_code(401);

    print json_encode(array("success"=>"false","cause"=>"DB Error"));
}