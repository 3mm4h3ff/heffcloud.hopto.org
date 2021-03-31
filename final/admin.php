<?php
session_start();
if($_SESSION["username"] != 'admin'){
        header("Location: dashboard.php");
        exit();
}
?>
