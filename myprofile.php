<?php
session_start();
include("koneksi.php");

$sql = "SELECT * FROM users";
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
    <title>My Profile - Tweeter</title>
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
            width: 420px;
            height: 600px;
            background-color: white;
            border-radius: 20px;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
        }

        .label {
            font-family: 'Poppins';
            padding-left: 65px;
        }

        .tulisan {
            font-family: 'Poppins';
            color: #8F8E8E;
            padding-left: 65px;
        }

        .button {
            cursor: pointer;
            border-radius: 100px;
            height: 35px;
            width: 160px;
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
    <a href="logout.php" class="myButton"><img src="images/icon.png" alt="" width="60px" height="60px"></a>
    <h1 class="title">Tweeter</h1>
    <div class="box">
        <center>
            <h1 style="font-family: 'Poppins'; padding-top: 40px">My Profile</h1>
            <img src="images/profile.png" width="20%">
        </center>
        <br>
        <b>
            <p class="label">Nama Lengkap : </p>
        </b>
        <p class="tulisan">
            <?php echo $row['full_name']; ?>
        </p>
        <hr width="68%">
        <b>
            <p class="label">Bio : </p>
        </b>
        <p class="tulisan">
            <?php echo $row['bio']; ?>
        </p>
        <hr width="68%">
        <br>
        <center>
            <button class="button" style="background-color: #E7D746;" onclick="window.open('editprofile.php?id=<?= $row['id'] ?>', '_self')">Edit</button>
            <br><br>
            <button class="button" style="background-color: #F44040;" onclick="hapus()">Hapus Akun</button>
        </center>
    </div>
    
    <script>
        function hapus() {
            if (confirm("Apakah kamu yakin ingin menghapus akun?")) {
                window.open("delete.php?id=<?= $row['id'] ?>", '_self');
            }
	}
    </script>
</body>

</html>