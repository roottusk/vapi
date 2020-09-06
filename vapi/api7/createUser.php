<?php


require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';


function validateAll()
{
    if(isset($_POST["username"]))
        if(isset($_POST["password"]))
            return true;
        else
            return false;
    else
        return false;
}

if(validateAll()){

    $username=mysqli_real_escape_string($dbconn,$_POST["username"]);
    $password=mysqli_real_escape_string($dbconn,$_POST["password"]);

    $authkey=hash("sha256",$username.$password.$API7_SECRETSALT);

    $query="INSERT into api7users values('','$username','$password','$authkey')";
    $result=mysqli_query($dbconn,$query);
    

    if($result){
        print json_encode(array("status"=>200,"userCreated"=>"true"));
    }
    else{
        print json_encode(array("status"=>400,"userCreated"=>"false","cause"=>"unable to create user"));
    }

}
else{
    print json_encode(array("status"=>400,"userCreated"=>"false","cause"=>"parameters not enough"));
}