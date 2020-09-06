<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';


$username=mysqli_real_escape_string($dbconn, $_POST["username"]);
$password=mysqli_real_escape_string($dbconn, $_POST["password"]);

$query="SELECT * from api1users where username='$username' AND password='$password'";

$result=mysqli_query($dbconn,$query);

if(mysqli_num_rows($result)>0)
{
    $row=$result->fetch_assoc();
    http_response_code(200);
    $r["success"]="true";
    $r["username"]=$row["username"];

    print json_encode($r);

}
else{
    http_response_code(401);
    print json_encode(array("success"=>"false","cause"=>"Incorrect Username or Password"));
}