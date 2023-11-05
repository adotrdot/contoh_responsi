<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $bio = $_POST["bio"];

    // Periksa apakah username sudah ada
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "Username sudah ada. Silakan coba lagi.";
    } else {
        // Tambahkan user ke database
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO users (full_name, username, password, bio) VALUES ('$full_name', '$username', '$hash_password', '$bio')";
        if ($conn->query($insert_query) === TRUE) {
            echo "Registrasi berhasil. Silakan login <a href='login.php'>di sini</a>.";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>