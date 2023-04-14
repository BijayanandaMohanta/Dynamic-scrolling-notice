<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="test";

    $con = mysqli_connect($host,$username,$password,$db);

    if(!$con){
        echo "Connection failed" . mysqli_connect_error();
        die();
    }
    // else{
    //     echo "Connection successful";
    // }
?>