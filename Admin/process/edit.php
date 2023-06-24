<?php
require '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylereview.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Movie Design</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">RVM</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active"><a href="../adminpage.php">Home</a></li>
                    <li class="menu-list-item"><a href="Movies.html">Movies</a></li>
                    <li class="menu-list-item"><a href="Series.html">Series</a></li>
                    <li class="menu-list-item"><a href="Popular.html">Popular</a></li>
                    <li class="menu-list-item"><a href="Trends.html">Trends</a></li>
                    <li class="menu-list-item"><a href="upload.php">Uploads</a></li>
                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="../../review/img/anhtest.jpg" alt="">
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
        <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>

    <?php
        $id = $_GET['id'];
        $rows = mysqli_query($conn, "SELECT * FROM allmovies WHERE id = $id")
    ?>
<?php foreach ($rows as $row) : ?>

    <div class="container">
        <div class="content-container">
        <div class="featured-content" style = "color: orange">
    <form class="" action="process_edit.php" method="post" autocomplete="off" enctype="multipart/form-data">
    
      <input type="hidden" name="id" id = "id" required value="<?php echo $row["id"]; ?>"> <br>
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value="<?php echo $row["name"]; ?>"> <br>

      <label for="image">New Image : </label>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="../img/<?php echo $row["image"]; ?>"> <br> 
       Or save this:
       <img src="../img/<?php echo $row["image"]; ?>" alt="" height = '100'>
       <input type="hidden" name="old_image"> <br>
      <label for="des">Description : </label>
      <input type="text" name="des" id = "des" required value="<?php echo $row["des"]; ?>"> <br>

      <label for="" name= "select">Type : </label><br>

        <input type="radio" name="type" checked id = "movies" value="movies"> 
        <label for="movies">Movies</label>

        <input type="radio" name="type" checked id = "series" value="series"> 
        <label for="movies">Series</label>

        <input type="radio" name="type" checked id = "popular" value="popular"> 
        <label for="movies">Popular</label>

        <input type="radio" name="type" checked id = "trends" value="trends"> 
        <label for="movies">Trends</label>
       <br><br>
      <button type = "submit" name = "submit">Edit</button>
    </form>
    </div>
                <?php endforeach; ?>
                
                <!-- <div class="comment-box">
                    <h1>Comments</h1>
                    <form action="">
                        <input type="text" name="fullname" placeholder="Full-Name...">
                        <input type="text" name="email" placeholder="Email-Address...">
                        <textarea name="comment" id="" cols="30" rows="10" placeholder="Type Your Comment..."></textarea>
                        <button type="submit">Submit</button>
                    </form>
            
                </div>     -->
            <script src="../../app.js"></script>

        
</body>
</html>