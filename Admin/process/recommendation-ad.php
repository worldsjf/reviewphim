<?php
require '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../User/review/stylerecomment.css">
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
                    <li class="menu-list-item"><a href="../Movies-ad.php">Movies</a></li>
                    <li class="menu-list-item"><a href="../Series-ad.php">Series</a></li>
                    <li class="menu-list-item"><a href="../Popular-ad.php">Popular</a></li>
                    <li class="menu-list-item"><a href="../Trends-ad.php">Trends</a></li>
                    <li class="menu-list-item"><a href="../upload.php">Uploads</a></li>

                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="../../User/review/img/anhtest.jpg" alt="">
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
        <a href="index.php"><i class="left-menu-icon fas fa-home"></i></a>
        <a href="../Admin/process/login.php"><i class="left-menu-icon fas fa-users"></i></a>
        <a href="recommendation.php"><i class="left-menu-icon fas fa-bookmark"></i></a>
    </div>
    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('../../User/review/img/anhtest.jpg');">
                <img class="featured-title" src="review/img/anh1.jpg" alt="">
                <p class="featured-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor
                    deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis
                    minima voluptatibus incidunt. Accusamus, provident.</p>
                <button class="featured-button"><a href="review/Endgame.html">Watch</a></button>
            </div>

            <table border = 1 cellspacing = 0 cellpadding = 10>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Image</td>
        <td>Des</td>
        <td>Type</td>
        <td>id</td>
        <td>Avg</td>
      </tr>
      <?php
      $i = 1;
      $a = 0;
      $rows = mysqli_query($conn, "SELECT * FROM allmovies ORDER BY avg DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td> <img src="../img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
        <td><?php echo $row["des"]; ?></td>
        <td><?php echo $row["type"]; ?></td>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["avg"]; ?></td>
    </tr>
      <?php endforeach; ?>
    </table>
    <br>

            <div class="movie-list-container">
                <h1 class="movie-list-title">#10 USER RECOMMENDATION</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <?php
                         $i = 0;
                         $rows = mysqli_query($conn, "SELECT * FROM allmovies ORDER BY avg DESC")
                        ?>

                        <?php foreach ($rows as $row) : ?>
                            <?php if($i < 10) {
                                $i++;
                                ?>
                            <div class="movie-list-item">
                                <img class="movie-list-item-img" src="../img/<?php echo $row["image"]; ?>" alt="">
                                <span class="movie-list-item-title"><?php echo $row["name"]; ?></span>
                                <p class="movie-list-item-desc"> <?php echo $row["des"]; ?></p>
                                <p class="movie-list-item-rate"> Rate: <?php echo $row["avg"]; ?> out of 5</p>
                                <button class="movie-list-item-button"><a href="process/review.php?id=<?php echo $row["id"] ?>">Watch</a></button>
                                <!-- <button class="option">Edit</a></button>
                                <button class="option">Delate</a></button> -->
                            </div>
                            <?php } ?>
                            <?php endforeach; ?>
                        </div>
         </div>
    </div>
    <script src="../../app.js"></script>
</body>

</html>