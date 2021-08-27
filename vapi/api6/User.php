<?php

require '../db/var.php';
require '../db/dbconn.php';

class User{
 private $name,$username,$password,$credit=0;

 function __construct($UserDetails)
    {
        $this->name=$UserDetails["name"];
        $this->username=$UserDetails["username"];
        $this->password=$UserDetails["password"];
        $this->credit=$UserDetails["credit"];
    }


    function addToDB()
    {
        $dbconnfunc=$GLOBALS["dbconn"];
        $this->name=mysqli_real_escape_string($dbconnfunc,$this->name);
        $this->username=mysqli_real_escape_string($dbconnfunc,$this->username);
        $this->password=mysqli_real_escape_string($dbconnfunc,$this->password);
        $this->credit=mysqli_real_escape_string($dbconnfunc,$this->credit);

        $query="INSERT into api6users (name,username,password,credit) values('$this->name','$this->username','$this->password','$this->credit')";

        $result=mysqli_query($dbconnfunc,$query);

        return $result;
    }

}