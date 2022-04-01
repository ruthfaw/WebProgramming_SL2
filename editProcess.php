<?php 
    session_start();
    include("config.php");

    if(isset($_POST['submit'])){

        $name = $_FILES['fotoProfil']['name'];
        $tempname = $_FILES['fotoProfil']['tmp_name'];
        $destination = "imageUpload/";

        $directory = $destination.$name;
        move_uploaded_file($tempname, $directory);

        if($name == ""){
            $str_query = "update userdata set 

                    namaDepan='".$_POST['namaDepan']."',namaTengah='".$_POST['namaTengah']."',
                    namaBelakang='".$_POST['namaBelakang']."',
                    tempatLahir='".$_POST['tempatLahir']."',
                    tanggalLahir='".$_POST['tglLahir']."',
                    wargaNegara='".$_POST['wargaNegara']."',
                    email='".$_POST['email']."',
                    noHP='".$_POST['noHP']."',
                    alamat='".$_POST['alamat']."',
                    kodePos='".$_POST['kodePos']."'
                    
                    where userName='".$_SESSION['userNameSession']."'
                    ";

        }else{
            $str_query = "update userdata set 

                    namaDepan='".$_POST['namaDepan']."',namaTengah='".$_POST['namaTengah']."',
                    namaBelakang='".$_POST['namaBelakang']."',
                    tempatLahir='".$_POST['tempatLahir']."',
                    tanggalLahir='".$_POST['tglLahir']."',
                    wargaNegara='".$_POST['wargaNegara']."',
                    email='".$_POST['email']."',
                    noHP='".$_POST['noHP']."',
                    alamat='".$_POST['alamat']."',
                    kodePos='".$_POST['kodePos']."',
                    fotoProfil = '".$directory."'
                    
                    where userName='".$_SESSION['userNameSession']."'
                    ";
        }
        
        
        $query = mysqli_query($connection, $str_query);

        if($query){
            echo "<script>";
                echo "alert('Data berhasil diubah')";
            echo "</script>";

            echo "<script>";
                echo "window.location='profile.php'";
            echo "</script>";
        }else{
            echo "<script>";
                echo "alert('Data gagal diubah')";
            echo "</script>";

            echo "<script>";
                echo "window.location='profile.php'";
            echo "</script>";
        }
    }

?>