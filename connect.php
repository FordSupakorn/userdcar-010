<?php
    //Connect Server
    $con = new mysqli("localhost","root","12345678","usedcar-010");
    if($con->connect_errno){
        die("Connection failed:".$con->connect_error);
    }
?>