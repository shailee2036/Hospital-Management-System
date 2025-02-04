<?php

session_start();
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "hospital_management_system"; 

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}