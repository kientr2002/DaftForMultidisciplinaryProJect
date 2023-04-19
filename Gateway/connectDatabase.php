<?php

function Connect()
 {
 $host = "localhost";
 $username = "root";
 $password = "";
 $database = "farm";
 return new mysqli($host, $username, $password,$database);;
 }
 
   
?>