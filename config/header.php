<?
if(isset($_SESSION['admin_key'])){
$checkAdminKey = $_SESSION['admin_key'];
} else {
    header("Location: loginadm.php");
};
?>
