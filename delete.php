<?php

include("koneksi.php");

if (!isset($_GET["id"])) {
    ?>
    <script>
        alert("Akun tidak ditemukan!");
        window.location.replace("myprofile.php");
    </script>
    <?php
}

$id = $_GET["id"];
$sql = "DELETE FROM users where id=$id";
if ($conn->query($sql)) {
    ?>
    <script>
        alert("Hapus akun berhasil!");
        window.location.replace("logout.php");
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Hapus akun gagal!");
        window.location.replace("logout.php");
    </script>
    <?php
}

?>