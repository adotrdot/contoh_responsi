<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tweeter</title>
    <style>
        body {
            background-color: #00ACED;
        }

        .box {
            width: 500px;
            height: 700px;
            background-color: white;
            border-radius: 12px;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
        }

        .title {
            text-align: center;
            padding-top: 18px;
            font-family: "Poppins";
            color: #00ACED;
        }

        .button {
            border-radius: 12px;
            height: 40px;
            width: 350px;
            background: #00ACED;
            color: white;
            font-family: 'Poppins';
            font-size: 17px;
            border: 0;
        }

        .input {
            border-radius: 12px;
            height: 40px;
            width: 350px;
            border-color: #BABABA;
            background-color: #F0F0F0;
            font-family: 'Poppins'
        }
    </style>
</head>

<body>
    <div class="box">
        <h1 class="title">Tweeter</h1>
        <center><img src="images/login.webp" alt=""></center>
        <center><b>
                <h2 style="font-family: 'Poppins';">Login</h2>
            </b></center>
        <center><input class="input" type="text" placeholder="Username"></center>
        <br>
        <center><input class="input" type="password" placeholder="Password"></center>
        <br><br>
        <center><input class="button" type="submit" value="Login"></center>
        <br>
        <center>
            <p style="font-family: 'Poppins'; font-size:14px">Belum punya akun ? <a href="" style="color: #00ACED; text-decoration:none">Daftar</a></p>
        </center>
    </div>
</body>

</html>