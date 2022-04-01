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

        table{
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        tr, td{
            padding: 20px 10px;
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

        .home>a{
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

        .profileTitle{
            display: flex;
            justify-content: center;
            margin: 20px;
        }

        .editButton{
           margin-left: 47%;
           margin-top: 10px;
        }

        .editButton>a{
            background-color: #E5B0EA;
            padding: 8px 30px 8px 30px;
            border: 2px solid black;
            text-decoration: none;
            color: black;
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

    <div class="profileTitle"><b>Profil Pribadi</b></div>

    <table>
        
        <tr></tr>
            
        <tr>
            <td>Nama Depan</td>
            <td><b><?php echo $data['namaDepan']?></b></td>

            <td>Nama Tengah</td>
            <td><b><?php echo $data['namaTengah']?></b></td>

            <td>Nama Belakang</td>
            <td><b><?php echo $data['namaBelakang']?></b></td>
        </tr>

        <tr></tr>

        <tr>
            <td>Tempat Lahir</td>
            <td><b><?php echo $data['tempatLahir']?></b></td>

            <td>Tgl Lahir</td>
            <td><b><?php echo $data['tanggalLahir']?></b></td>

            <td>NIK</td>
            <td><b><?php echo $data['NIK']?></b></td>
        </tr>

        <tr></tr>

        <tr>
            <td>Warga Negara</td>
            <td><b><?php echo $data['wargaNegara']?></b></td>

            <td>Email</td>
            <td><b><?php echo $data['email']?></b></td>

            <td>No HP</td>
            <td><b><?php echo $data['noHP']?></b></td>
        </tr>

        <tr></tr>

        <tr>
            <td>Alamat</td>
            <td><b><?php echo $data['alamat']?></b></td>

            <td>Kode Pos</td>
            <td><b><?php echo $data['kodePos']?></b></td>

            <td>Foto Profil</td>
            <td><b><?php echo "<img src= '{$data['fotoProfil']}' width='60' height='80'>"?></b></td>
        </tr>

        <tr></tr>

    </table>

    <div class="editButton">
    <?php 
        echo "<a href='editProfile.php'>Edit</a>";
    ?>
    </div>

</body>
</html>