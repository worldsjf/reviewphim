<?php
require '../connection.php';
if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $star = $_POST["rating"];
    $avg = $_POST["avg"];


    $query = "INSERT INTO rate VALUES('', '$star', '$id')";
    mysqli_query($conn, $query);

    $run = "UPDATE allmovies SET avg = '$avg' WHERE id = '$id'";
    mysqli_query($conn, $run);
    echo
    "
    <script>
      alert('Successfully Added');
      document.location.href = '../index.php';
    </script>
    ";
}
?>