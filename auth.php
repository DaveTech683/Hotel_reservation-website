<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Administration</title>
</head>
<body>
    <?php
    include("authdb.php")
    ?>
    <div class="all">
        <nav> 
            <div class="side-bar">
                <div class="logo">
                    <h1>Drums Suite</h1>
                </div>
                <div class="nav-btn">
                    <button class="report-btn" onclick="window.location.href='admin.php'"><i class="fa fa-home"></i> Dashboard</button>
                    <button class="analys-btn" onclick="window.location.href='auth.php'"> <i class="fa fa-bolt"></i> Authorization</button>
                </div>
            </div>
            <p>@Xterra</p>
        </nav>
        <section id="report">
           <div class="head-content">
                <h3>ADMIN >>></h3><p>Authorization</p>
           </div>
           <div class="auth-form">
                <form action="" method="post">
                    <h1>AUTHORIZE USER</h1>
                    <p>Full Name: <span style="color: red; font-size: 20px;"><?php  echo $steric;?></span></p>
                    <input name="name" type="text" placeholder="<?php  echo $nameErr;?>">
                    <p>Unique Name: <span style="color: red; font-size: 20px;"><?php  echo $steric;?></span></p>
                    <input name="uname" type="text" placeholder="<?php  echo $unameErr;?>">
                    <p>Password: <span style="color: red; font-size: 20px;"><?php  echo $steric;?></span></p>
                    <input name="passwording" type="text" placeholder="<?php  echo $passwordErr;?>">
                    <p>Email: <span style="color: red; font-size: 20px;"><?php  echo $steric;?></span></p>
                    <input name="mail" type="text" placeholder="<?php  echo $mailErr;?>">
                    <p>Telphone: <span style="color: red; font-size: 20px;"><?php  echo $steric;?></span></p>
                    <input name="phone" type="text" placeholder="<?php  echo $phoneErr;?>">
                    <p>Staff Role: <span style="color: red; font-size: 20px;"><?php  echo $steric;?></span></p>
                    <input name="role" type="text" placeholder="<?php  echo $roleErr;?>">
                    <button type="submit">Authorize</button>
                </form>

           </div>
        </section>
    </div>
</body>
</html>