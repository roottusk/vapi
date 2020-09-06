<?php
session_start();

require '../../db/var.php';
require '../../db/dbconn.php';
require '../../db/headerset.php';
require '../../db/CustomHeaderAuth.php';




if($_SESSION["RateLimit"]<$DEFAULT_RATE_LIMIT && $_SESSION["RateLimit"] > 0 )
{
    http_response_code(200);
    header("X-Rate-Limit: ".$_SESSION["RateLimit"]);
    $_SESSION["RateLimit"]=$_SESSION["RateLimit"]-1;

    
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username=$_POST["username"];
        $password=$_POST["password"];

        $query="SELECT * from api9users where username='$username' and password='$password'";

        $result=mysqli_query($dbconn,$query);

        if(mysqli_num_rows($result)>0)
        {
            $row=$result->fetch_assoc();
            $_SESSION["uname"]=$row["username"];
            http_response_code(200);
            print json_encode(array("loginsuccess"=>"true","msg"=>"User logged in"));
        }
        else{
            
            print json_encode(array("loginsuccess"=>"false","cause"=>"Username or Password incorrect"));
        }

    }
    else{

        
        print json_encode(array("loginsuccess"=>"false","cause"=>"Username or Password not provided"));

    }

    
}
else{

    if($_SESSION["RateLimit"]===0)
    {
        http_response_code(429);
        header("X-Rate-Limit: ".$_SESSION["RateLimit"]);
    }
    else{
    http_response_code(200);
    header("X-Rate-Limit: ".$DEFAULT_RATE_LIMIT);
    $_SESSION["RateLimit"]=$DEFAULT_RATE_LIMIT;
    $_SESSION["RateLimit"]=$_SESSION["RateLimit"]-1;

   
    }
}




   




