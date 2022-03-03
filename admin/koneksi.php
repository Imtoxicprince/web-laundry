<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "web_laundry";

$koneksi = mysqli_connect($serverName, $userName, $password, $database);

//if(!$koneksi){
  //  die("Failed to Connection : " . mysqli_connect_error());
//}
//else{
//echo "Connection Success!!";
//}
?>