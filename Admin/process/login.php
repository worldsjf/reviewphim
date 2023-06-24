<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <form class = login action="process_login.php" method="POST">
        <h1>LOGIN</h1>
        Email
        <input type="email" name="email">
        <br>
        Password
        <input type="password" name="password">
        <br>
        <button>Login</button>
    </form>
</body>
</html>