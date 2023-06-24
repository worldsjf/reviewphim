<?php
require '../connection.php';

if(isset($_POST["submit"])){
    $id = $_POST['id'];
    $name = $_POST["name"];
    $image = $_FILES["image"]["name"];
    $des = $_POST["des"];
    $type = $_POST["type"];


      $query = "UPDATE allmovies SET name = '$name', image = '$image', des = '$des', type = '$type' WHERE id = '$id'";
      $query_run = mysqli_query($conn, $query);
      if($query_run)
      move_uploaded_file($_FILES["image"]["tmp_name"], '../img/'. $_FILES["image"]["name"]);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = '../adminpage.php';
      </script>
      ";
    }

// require '../connection.php';
// if(isset($_POST["submit"])){
    
//   $name = $_POST["name"];
//   if($_FILES["image"]["error"] == 4){
//     echo
//     "<script> alert('Image Does Not Exist'); </script>"
//     ;
//   }
//   else{
//     $fileName = $_FILES["image"]["name"];
//     $fileSize = $_FILES["image"]["size"];
//     $tmpName = $_FILES["image"]["tmp_name"];

//     $validImageExtension = ['jpg', 'jpeg', 'png'];
//     $imageExtension = explode('.', $fileName);
//     $imageExtension = strtolower(end($imageExtension));
//     if ( !in_array($imageExtension, $validImageExtension) ){
//       echo
//       "
//       <script>
//         alert('Invalid Image Extension');
//       </script>
//       ";
//     }
//     else if($fileSize > 1000000){
//       echo
//       "
//       <script>
//         alert('Image Size Is Too Large');
//       </script>
//       ";
//     }
//     else{
//       $newImageName = uniqid();
//       $newImageName .= '.' . $imageExtension;
//       $des = $_POST["des"];
//       $type = $_POST["type"];

//       move_uploaded_file($tmpName, '../img/' . $newImageName);
//       $query = "UPDATE allmovies SET '$name', '$newImageName', '$des', '$type'  ";
//       mysqli_query($conn, $query);
//       echo
//       "
//       <script>
//         alert('Successfully Added');
//         document.location.href = '../adminpage.php';
//       </script>
//       ";
//     }
//   }
// }
?>