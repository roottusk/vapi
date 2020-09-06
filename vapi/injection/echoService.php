<?php

header("Content-Type: application/json");

$address=$_GET["name"];

$result=exec("echo ".$address);


print json_encode(array("success"=>"true","result"=>$result));