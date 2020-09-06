<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';

$email = mysqli_real_escape_string($dbconn, $_POST["email"]);
$password = mysqli_real_escape_string($dbconn,$_POST["password"]);


$result = mysqli_query($dbconn,"SELECT email,token from api2users WHERE email='$email' AND password='$password'");

if(mysqli_num_rows($result)>0){

    http_response_code(200);

    $row = $result->fetch_assoc();

    $row["success"]="true";
    print json_encode($row);

}
else{

    http_response_code(403);

    print json_encode(array("success"=>"false","cause"=>"emailorpasswordincorrect"));
}
