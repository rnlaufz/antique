<?php
if(isset($_SESSION['token'])){
    return true;
} else {
    header("Location: loginadm.php");
};
?>
