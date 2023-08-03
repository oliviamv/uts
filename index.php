<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTAP</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <!--style css-->
    <style>
    :root {
        --primary: rgb(255, 255, 255);
        --bg: rgb(10, 12, 12);
    }

    body {
        margin: 0px;
        padding: 0px;
        background-color: var(--primary);
    }

    .container-navbar {
        background-color: black;
        height: 50px;
        width: 100%;
    }

    .container-navbar .logo {
        padding-left: 20px;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .ul-navbar {
        display: flex;
        text-decoration: none;
        padding-left: 100px;
        margin-top: -40px;
        padding-top: 20px;
    }

    .li-navbar {
        list-style-type: none;
        margin: 5px;
    }

    ul li a:hover {
        color: red;
    }

    label {
        display: block;
        margin: 10px;
        padding-top: 20px;
    }

    input {
        margin: 10px;
        width: 50%;
        height: 30px;
    }

    button {
        margin: 10px;
        width: 10%;
        height: 30px;
        border-radius: 20px;
        background-color: silver;
    }

    .table {
        width: 20px;
    }

    h2 {
        color: black;
        padding-top: 30px;
        padding-left: 200px;
    }
    </style>
    <!--style css selesai-->
    <!--NAVIGASI BAR-->
    <div class="container-navbar">
        <img class="logo" src="img/logo.png" alt="home" width="5%" padding-top="20px">
        <ul class="ul-navbar">
            <li class="li-navbar"><a href="#">HOME</a></li>
            <li class="li-navbar"><a href="index.php?page=datapembayaran">PEMBAYARAN</a></li>
            <li class="li-navbar"><a href="index.php?page=datapengurus">PENGURUS</a></li>
            <li class="li-navbar"><a href="index.php?page=datasantri">SANTRI</a></li>
        </ul>
    </div>
    <!--NAVIGASI BAR SELESAI--> 
    <?php
     
     include 'libs.php';
?> 
<script>
    feather.replace()
    </script>
</body>
</html>