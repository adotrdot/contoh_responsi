<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form action="">
            <center><input class="input" type="text" placeholder="Nama Lengkap"></center>
            <br>
            <center><textarea class="input-bio" name="bio" id="" cols="50" rows="10" placeholder="Bio (Ceritakan tentang dirimu)"></textarea></center>
            <br><br>
            <center><input class="button" type="submit" value="Simpan" style="background-color: #E7D746;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" value="Batal" style="background-color: #37474F;"></center>
        </form>
    </div>
    <!-- <button>Logout</button>
    <h1>Edit Profile</h1>
    <form action="#" method="post">
        <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap">
        <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Bio"></textarea>
        <button type="submit">Simpan</button>
        <button>Batal</button>
    </form> -->
</body>

</html>