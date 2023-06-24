<?php
require '../connection.php';
if(isset($_POST["submit"])){
    $id = $_POST["id"];
      $name = $_POST['fullname'];
      $email = $_POST["email"];
      $comment = $_POST["comment"];
  
  
      $query = "INSERT INTO comment VALUES('', '$name', '$email', '$comment', '$id')";
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