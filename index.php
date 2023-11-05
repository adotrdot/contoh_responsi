<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location: myprofile.php");
} else {
    header("Location: login.php");
}

?>