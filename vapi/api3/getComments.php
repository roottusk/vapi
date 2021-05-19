<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';

$query="SELECT * from comments WHERE postid=1";

$result=mysqli_query($dbconn,$query);

if(mysqli_num_rows($result)>0)
{
    $arr = array();
    
    while($row = $result->fetch_assoc()){

        $arr[]=$row;
        
    }
    $r["comments"]=$arr;
    
    $r["success"]="true";

    print json_encode($r);
}
else{
    print json_encode(array("success"=>"false","cause"=>"DB Error"));
}
