<?php

include("koneksi.php");

if (isset($_POST['batal'])) {
    header("Location: myprofile.php");
}

if (isset($_POST["simpan"])) {
    $id = $_POST['id'];
    $full_name = $_POST['fullname'];
    $bio = $_POST['bio'];

    $sql = "UPDATE users SET full_name='$full_name', bio='$bio' WHERE id=$id";
    if ($conn->query($sql)) {
        ?>
        <script>
            alert("Update berhasil!");
            window.location.replace("myprofile.php");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Update gagal!");
            window.location.replace("myprofile.php");
        </script>
        <?php
    }
}

if (!isset($_GET["id"])) {
    ?>
    <script>
        alert("Akun tidak ditemukan!");
        window.location.replace("myprofile.php");
    </script>
    <?php
}

$id = $_GET["id"];
$sql = "SELECT * FROM users where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Edit Profile - Tweeter</title>
    <style>
        body {
            background-color: #00ACED;
        }

        .title {
            text-align: center;
            color: white;
            font-family: "Poppins";
        }

        .box {
            width: 460px;
            height: 500px;
            background-color: white;
            border-radius: 20px;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
        }

        .input {
            border-radius: 12px;
            height: 50px;
            width: 350px;
            border-color: #BABABA;
            background-color: #F0F0F0;
            font-family: 'Poppins'
        }

        .input-bio {
            border-radius: 12px;
            height: 120px;
            width: 350px;
            border-color: #BABABA;
            background-color: #F0F0F0;
            font-family: 'Poppins'
        }

        .button {
            cursor: pointer;
            border-radius: 100px;
            height: 40px;
            width: 120px;
            color: white;
            font-family: 'Poppins';
            font-size: 17px;
            border: 0;
        }

        .myButton {
            padding-right: 15px;
            display: block;
            position: fixed;
            right: 0px;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <a href="" class="myButton"><img src="images/icon.png" alt="" width="60px" height="60px"></a>
    <h1 class="title">Tweeter</h1>
    <br>
    <div class="box">
        <center>
            <h1 style="font-family: 'Poppins'; padding-top: 40px">Edit Profile</h1>
        </center>
        <br>
        <form action="editprofile.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <center><input class="input" type="text" name="fullname" placeholder="Nama Lengkap" value="<?= $row['full_name'] ?>"></center>
            <br>
            <center><textarea class="input-bio" name="bio" id="" cols="50" rows="10" placeholder="Bio (Ceritakan tentang dirimu)"><?= $row['bio'] ?></textarea></center>
            <br><br>
            <center><input class="button" type="submit" name="simpan" value="Simpan" style="background-color: #E7D746;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" name="batal" value="Batal" style="background-color: #37474F;"></center>
        </form>
    </div>
</body>

</html>