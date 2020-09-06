<?php

require '../db/var.php';
require '../db/dbconn.php';
require '../db/headerset.php';
require '../db/CustomHeaderAuth.php';

$requestAuth = new CustomHeaderAuth();


if(isset($_GET["id"]))
{

    if($requestAuth->isHeaderSet())
    {

        $query="SELECT * from api1users WHERE username='".$requestAuth->getUsername()."' AND password='".$requestAuth->getPassword()."'";
        $result = mysqli_query($dbconn,$query);
        
        if(mysqli_num_rows($result)  > 0)
        {
            
            $id=mysqli_real_escape_string($dbconn,$_GET["id"]);
            $result2 = mysqli_query($dbconn,"SELECT username,name,course from api1users where id=".$id);
            if(mysqli_num_rows($result2) > 0)
            {
                

                $row = $result2->fetch_assoc();
                $row["success"]="true";
                print json_encode($row);
            }
            else{
               
                print json_encode(array("success"=>"false","cause"=>"userNotFound"));
            }

        }
        else{
            
            print json_encode(array("success"=>"false","cause"=>"usernameOrPasswordIncorrect"));
        }



    }
    else{
        print json_encode(array("success"=>"false","cause"=>"authHeaderNotSet"));
    }

}
else{
    print json_encode(array("success"=>"false","cause"=>"idNotSet"));
}




