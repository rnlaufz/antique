<?php
require 'config/config.php';
require 'includes/form_handlers/login_handler.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="shortcut icon" href="stylesheets/img/favicon.png" type="image/x-icon">
    <title>Antique | Login</title>
</head>
<body>
    <div class="login-container">
    <div id="login-card">
    <h3>Antique Admin</h3>
    <form action="loginadm.php" method="POST">
    <div class="form-control">
    <input name="login" type="text" placeholder="Login" />
    </div>
    <div class="form-control">
    <input name="password" type="password" placeholder="Password" />
    </div>
    <div class="form-control">
    <input name="signIn" type="submit" value="Submit"  />
  
    </div>
    <br>
    </form>
    </div>
    <div id="footer">
        <p>Admin page</p>
    
   <p>Antique Copyright &copy; 2021 All rights reserved | Build by /RZ</p>
   </div>
    </div>
</body>
</html>