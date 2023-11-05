<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Registrasi - Tweeter</title>
    <style>
        body {
            background-color: #00ACED;
        }

        .box {
            width: 780px;
            height: 600px;
            background-color: white;
            border-radius: 20px;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
        }

        .title {
            text-align: center;
            color: #00ACED;
            font-family: "Poppins";
            padding-top: 20px;
        }

        .input {
            border-radius: 12px;
            height: 40px;
            width: 250px;
            border-color: #BABABA;
            background-color: #F0F0F0;
            font-family: 'Poppins'
        }

        .input-bio {
            border-radius: 12px;
            height: 100px;
            width: 250px;
            border-color: #BABABA;
            background-color: #F0F0F0;
            font-family: 'Poppins'
        }

        .button {
            cursor: pointer;
            border-radius: 12px;
            height: 40px;
            width: 250px;
            background: #00ACED;
            color: white;
            font-family: 'Poppins';
            font-size: 17px;
            border: 0;
        }
    </style>
</head>

<body>
    <div class="box">
        <h1 class="title">Tweeter</h1>
        <br><br>
        <table>
            <form action="register_process.php" method="POST">
                <tr>
                    <td style="width: 50%; font-weight:bold; font-family:'Poppins'; font-size: 25px; text-align:center">
                        Registrasi</td>
                    <td rowspan="8"><img src="images/regis.webp" alt="" width="80%"></td>
                </tr>
                <tr>
                    <td>
                        <center><input class="input" type="text" name="username" placeholder="Username"></center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><input class="input" type="password" name="password" placeholder="Password"></center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr width="65%">
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><input class="input" name="full_name" type="text" placeholder="Nama Lengkap"></center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><textarea class="input-bio" name="bio" id=""
                                placeholder="Bio (Ceritakan tentang dirimu)"></textarea></center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><input class="button" type="submit" value="Daftar"></center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <p style="font-family: 'Poppins'; font-size:14px">Belum punya akun ? <a href="login.php"
                                    style="color: #00ACED; text-decoration:none">Login</a></p>
                        </center>
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <!-- <h1>Registrasi</h1>
    <form action="#" method="post">
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Konfirmasi Password">
        <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap">
        <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Bio"></textarea>
        <input type="submit" value="Daftar">
    </form>
    <p>Sudah punya akun? <a href="login.php">Login</a></p> -->
</body>

</html>