<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web app";

$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con){
    die("conec faild :" . mysqli_connect_error());
}
?>