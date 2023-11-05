<?php
include("koneksi.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {

            header("Location: myprofile.php");
            exit();
        } else {
            $error = "Password salah. Silakan coba lagi.";
            header("Location: login.php?error=" . urlencode($error));
            exit();
        }
    } else {
        $error = "Username tidak ditemukan. Silakan coba lagi.";
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }
}

$conn->close();
?>