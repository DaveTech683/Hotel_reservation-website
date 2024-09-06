<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>LogIn</title>
</head>
<body>
    <?php
    include("logindb.php")
    ?>
    <div class="login-all">
        <div class="login">
            <form action="" method="post">
                <h1>Let's Log In</h1>
                <p>Unique Name: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></p>
                <input name="unique" type="text">
                <p>Password: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></p>
                <input name="pass" type="password">
                <p>Email: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></p>
                <input name="mailing" type="email">
                <button type="submit">LOG IN</button>
            </form>
        </div>
    </div>
</body>
</html>