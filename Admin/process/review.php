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
    <title>Review Admin Page</title>
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
    <a href="adminpage.php.php"><i class="left-menu-icon fas fa-home"></i></a>
        <i class="left-menu-icon fas fa-users"></i>
        <a href="../../User/recommendation.php"><i class="left-menu-icon fas fa-bookmark"></i></a>
    </div>

    <?php
        $id = $_GET['id'];
        $rows = mysqli_query($conn, "SELECT * FROM allmovies WHERE id = $id")
    ?>
<?php foreach ($rows as $row) : ?>

    <div class="container">
        <div class="content-container">
            <div class="featured-content" 
            style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('../img/<?php echo $row["image"]; ?>');"></div>
                <img class="featured-title" src="../img/<?php echo $row["image"]; ?>" alt="">
                <p class="featured-desc"> <?php echo $row["name"]; ?> <br> <?php echo $row["des"]; ?>
                </p>
                    <img class="featured-title" src="../img/tinhngduyenma.jpg" alt="">
                    <button class="featured-button"><a href="edit.php?id=<?php echo $row["id"] ?>">Edit</a></button>
                <button class="featured-button"><a href="delete.php?id=<?php echo $row["id"] ?> " onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></button>
                </div>
                <?php endforeach; ?>
                
                <div class="comment-box">
                    <h1>Comments</h1>
                    <form action="comment.php" method="POST">
                        <input type="text" name="fullname" placeholder="Full-Name...">
                        <input type="text" name="email" placeholder="Email-Address...">
                        <textarea name="comment" id="" cols="20" rows="10" placeholder="Type Your Comment..."></textarea>
                        <input type="hidden" name="id" required value="<?php echo $_GET['id']; ?>">
                        <button type="submit" name = "submit">Submit</button>
                    </form>
                </div>   

                <form action="rating.php" method="POST">
                <label for="">Rating </label><br>
                        <fieldset class="rating">
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5" class="full"></label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4" class="full"></label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3" class="full"></label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2" class="full"></label>
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1" class="full"></label>
                            <input type="hidden" name="id" required value="<?php echo $_GET['id']; ?>">
                            <button type="submit" name = "submit" >Rate</button>
                            </fieldset>
                            
                </form>

                <?php
                    $id = $_GET['id'];
                    $i = 1;
                    $rows = mysqli_query($conn, "SELECT * FROM comment WHERE id = $id ORDER BY C_id DESC")
                ?>
                    <h1 class="comment-box-chat-title">Comment Box</h1>
                    <?php foreach ($rows as $row) : ?>
                    <div class="comment-box-chat">
                    <p class="user-infor">
                    Name: <?php echo $row["name"];?> Email: <?php echo $row["email"];?> <br> </p>
                     <p class="user-comment"> <?php echo $row["comment"];?> <br></p>
                </div>     
                        <?php endforeach; ?>
                        

            <script src="../../app.js"></script>

        
</body>
</html>