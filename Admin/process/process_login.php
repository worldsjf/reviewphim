<?php
$email = $_POST['email'];
$pass = $_POST['password'];
require '../connection.php';

$sql = "select * from admin where email = '$email' and password = '$pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1) {
    $each = mysqli_fetch_array($result);
    session_start();

    $_SESSION['A_id'] = $each['A_id'];
    $_SESSION['name'] = $each['name'];
    $_SESSION['level'] = $each['level'];

    header('location:../adminpage.php');
    exit;
} else{ 
    if(mysqli_num_rows($result) == 0) {
        $each = mysqli_fetch_array($result);
        session_start();
    
        $_SESSION['A_id'] = $each['A_id'];
        $_SESSION['name'] = $each['name'];
        $_SESSION['level'] = $each['level'];
    
        header('location:../User/index.php');
        exit; }
    }
?>