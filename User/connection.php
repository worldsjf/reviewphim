<?php
$host = "localhost";
$username = "root";
$password ="";
$dbname = "movies";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("ket noi khong thanh cong:". $conn->connect_error);
}
?>