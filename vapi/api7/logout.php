<?php
session_start();

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';

$_SESSION["uname"]="";

session_destroy();

http_response_code(200);
print json_encode(array("logoutsuccess"=>"true","msg"=>"User logged out"));