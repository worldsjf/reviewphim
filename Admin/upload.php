<?php
require 'connection.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;
      $des = $_POST["des"];
      $type = $_POST["type"];

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO allmovies VALUES('', '$name', '$newImageName', '$des', '$type', '')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'adminpage.php';
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleadmin.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Upload</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">RVM</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                <li class="menu-list-item active"><a href="adminpage.php">Home</a></li>
                    <li class="menu-list-item"><a href="Movies-ad.php">Movies</a></li>
                    <li class="menu-list-item"><a href="Series-ad.php">Series</a></li>
                    <li class="menu-list-item"><a href="Popular-ad.php">Popular</a></li>
                    <li class="menu-list-item"><a href="Trends-ad.php">Trends</a></li>
                    <li class="menu-list-item"><a href="upload.php">Uploads</a></li>
                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="../User/review/img/anhtest.jpg" alt="">
                <div class="profile-text-container">
                    <span class="profile-text">Profile</span>
                    <i class="fas fa-caret-down"></i>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
    <!-- <form>
        <div class="Search ">
                <div class="icon fas fa-search"></div>
                <div class="input">
                    <input type="search" name="search" placeholder="Search" id="mysearch">
                </div>
            </div>
        </form> -->
        <a href="adminpage.php.php"><i class="left-menu-icon fas fa-home"></i></a>
        <i class="left-menu-icon fas fa-users"></i>
        <a href="../User/recommendation.php"><i class="left-menu-icon fas fa-bookmark"></i></a>
    </div>
    <div class="container">
        <div class="content-container">
          <div class="featured-content" style = "color: orange">
          <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <label for="name">Name : </label>
            <textarea name="name" id = "name" cols="20" rows="3" required value=""></textarea> <br><br>

            <label for="image">Image : </label>
            <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>

            <label for="des">Description : </label>
            <textarea name="des" id = "des" cols="60" rows="15" required value=""></textarea> <br><br>

            <label for="">Type : </label><br>

              <input type="radio" name="type" checked id = "movies" value="movies"> 
              <label for="movies">Movies</label>

              <input type="radio" name="type" checked id = "series" value="series"> 
              <label for="movies">Series</label>

              <input type="radio" name="type" checked id = "popular" value="popular"> 
              <label for="movies">Popular</label>

              <input type="radio" name="type" checked id = "trends" value="trends"> 
              <label for="movies">Trends</label>
            <br><br>
            <button type = "submit" name = "submit">Submit</button>
          </form>
    </div>
    <br>
    <script src="../app.js"></script>
</body>
</html>
