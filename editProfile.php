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

        body{
            background-color: #F1C6E7;
            display: flex;
            justify-content: center;
        }

        tr, td{
            padding: 10px;
        }

        caption{
            padding: 20px;
        }

        .button{
           margin-left: 760px;
           margin-top: 10px;
           gap: 10px;
           display: flex;
        }

        .button>a{
            background-color: #fdd7ac;
            padding: 8px;
            border: 2px solid black;
            text-decoration: none;
            color: black;
        }
        
        input[type=submit]{
            background-color: #adf59f;
            padding: 8px;
            border: 2px solid black;
        }

    </style>

<form action="editProcess.php" method="post" enctype="multipart/form-data">
        <table>
            <caption>Edit Profile</caption>

            <tr></tr>
            
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="namaDepan" value="<?php echo $data['namaDepan'] ?>"></td>

                <td>Nama Tengah</td>
                <td><input type="text" name="namaTengah" value="<?php echo $data['namaTengah'] ?>"></td>

                <td>Nama Belakang</td>
                <td><input type="text" name="namaBelakang" value="<?php echo $data['namaBelakang'] ?>"></td>
            </tr>

            <tr></tr>

            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatLahir" value="<?php echo $data['tempatLahir'] ?>"></td>

                <td>Tgl Lahir</td>
                <td><input type="date" name="tglLahir" value="<?php echo $data['tanggalLahir'] ?>"></td>

                <td>NIK</td>
                <td><input type="text" name="NIK" value="<?php echo $data['NIK'] ?>"></td>
            </tr>

            <tr></tr>

            <tr>
                <td>Warga Negara</td>
                <td><input type="text" name="wargaNegara" value="<?php echo $data['wargaNegara'] ?>"></td>

                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $data['email'] ?>"></td>

                <td>No HP</td>
                <td><input type="text" name="noHP" value="<?php echo $data['noHP'] ?>"></td>
            </tr>

            <tr></tr>

            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" cols="20" rows="3"><?php echo $data['alamat'] ?></textarea></td>

                <td>Kode Pos</td>
                <td><input type="text" name="kodePos" value="<?php echo $data['kodePos'] ?>"></td>

                <td>Foto Profil</td>
                <td><input type="file" name="fotoProfil"></td>
            </tr>

            <tr></tr>

        </table>
        <div class="button">
                <a href="profile.php">Kembali</a>
                <input type="submit" name="submit" value="Confirm">
        </div>
    </form>
</body>
</html>