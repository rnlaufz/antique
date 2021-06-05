<?php
if(isset($_SESSION['token'])){
// Destroy session after six hours
$now = time();
if(isset($_SESSION['timeout']) && $now > $_SESSION['timeout']){
    session_unset();
    session_destroy();
    session_start();
    header("Location: loginadm.php");
}
} else {
    header("Location: loginadm.php");
};


?>
