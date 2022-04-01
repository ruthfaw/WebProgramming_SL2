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
            background-color: #c2f0f7;
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

    <form action="registerProcess.php" method="post" enctype="multipart/form-data">
        <table>
            <caption>Register</caption>

            <tr></tr>
            
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="namaDepan"></td>

                <td>Nama Tengah</td>
                <td><input type="text" name="namaTengah"></td>

                <td>Nama Belakang</td>
                <td><input type="text" name="namaBelakang"></td>
            </tr>

            <tr></tr>

            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatLahir"></td>

                <td>Tgl Lahir</td>
                <td><input type="date" name="tglLahir"></td>

                <td>NIK</td>
                <td><input type="text" name="NIK"></td>
            </tr>

            <tr></tr>

            <tr>
                <td>Warga Negara</td>
                <td><input type="text" name="wargaNegara"></td>

                <td>Email</td>
                <td><input type="email" name="email"></td>

                <td>No HP</td>
                <td><input type="text" name="noHP"></td>
            </tr>

            <tr></tr>

            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" cols="20" rows="3"></textarea></td>

                <td>Kode Pos</td>
                <td><input type="text" name="kodePos"></td>

                <td>Foto Profil</td>
                <td><input type="file" name="fotoProfil"></td>
            </tr>

            <tr></tr>

            <tr>
                <td>Username</td>
                <td><input type="text" name="userName"></td>

                <td>Password 1</td>
                <td><input type="password" name="password1"></td>

                <td>Password 2</td>
                <td><input type="password" name="password2"></td>
            </tr>

        </table>
        <div class="button">
                <a href="index.php">Kembali</a>
                <input type="submit" name="submit" value="Register">
        </div>
    </form>
</body>
</html>