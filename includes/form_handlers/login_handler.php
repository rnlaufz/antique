<?php

// Declare form variables
$login = '';
$password = '';
$errorArray = array(); // array for errors
$messageArray = array(); // array for messa

if(isset($_POST['signIn'])){
// Login form values
// Remove html tags and whitespaces
  $login = strip_tags($_POST['login']);
  $login = str_replace(' ', '', $login);

// Session variables
  $_SESSION['login'] = $login;  

  $password = strip_tags($_POST['password']);
  $salt = 'ksjbuiu5nik3445fm!fcHFRDCW^I*VFRNSW$';
  $saltPassword = $salt.$password;
  $password = md5($saltPassword);

  $checkDBQuery = mysqli_query($connectQuery, "SELECT * FROM administrator WHERE login='$login' AND password='$password'");
  $checkLoginQuery = mysqli_num_rows($checkDBQuery);
  if($checkLoginQuery == 1){
      $row = mysqli_fetch_array($checkDBQuery);

    //   Store user id
      $_SESSION['admin_key'] = $adminKey;
      header('Location: admin.php');
      exit();
  }

 
}
?>