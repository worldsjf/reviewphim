<?php
$id = $_GET['id'];
require '../connection.php';
$delete = "DELETE FROM allmovies WHERE id = '$id'";
mysqli_query($conn, $delete);
echo
      "
      <script>
        alert('Successfully Delete');
        document.location.href = '../adminpage.php';
      </script>
      ";
?>