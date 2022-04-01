<?php
    session_start();
    include("config.php");

    $str_query = "select * from userdata where userName='".$_SESSION['userNameSession']."'";
    $query = mysqli_query($connection, $str_query);

    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

        *{
            margin: 0;
            padding: 0;
        }

        body{
            background-color: #cad1ff;
        }

        .nav{
            background-color: #f9ffca;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            padding: 12px;
        }

        .titleNav{
            margin-left: 5px;
        }

        .homeNProfile{
           margin-left: 500px;
           display: flex;
           gap: 40px;
            
        }

        .profile>a{
            text-decoration: none;
            color: black;
        }

        .logoutNav{
            margin-right: 10px;
        }

        .logoutNav>a{
           text-decoration: none;
           color: black;
        }

        .greetings{
           text-align: center;
           margin-top: 175px;
        }

    </style>

    <div class="nav">
        <div class="titleNav"> Aplikasi Pengelolaan Keuangan</div>
        <div class="homeNProfile">
            <div class="home"><a href="home.php">Home</a></div>
            <div class="profile"><a href="profile.php">Profile</a></div>
        </div>
        <div class="logoutNav"><a href="logout.php">Logout</a></div>
    </div>

    <div class="greetings">
        Halo <b><?php echo $data['namaDepan']." ".$data['namaTengah']." ".$data['namaBelakang']?></b>, Selamat datang di Aplikasi Pengelolaan Keuangan
    </div>
        
</body>
</html>