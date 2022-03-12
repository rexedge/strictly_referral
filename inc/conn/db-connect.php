<?php
    $url='localhost';
    $user='root';
    $password='';
    $conn=mysqli_connect($url,$user,$password,"striferral");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>