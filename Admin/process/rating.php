<?php
require '../connection.php';
if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $star = $_POST["rating"];

    $query = "INSERT INTO rate VALUES('', '$star', '$id')";
    mysqli_query($conn, $query);
    echo
    "
    <script>
      alert('Successfully Added');
      document.location.href = '../adminpage.php';
    </script>
    ";
}
?>