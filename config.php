<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "datausersession2";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        //echo "Koneksi Behasil";
    }else{
        echo "Koneksi Gagal ".mysqli_connect_error();
    }
    
?>