<?php 

    session_start();
    include("config.php");

    $str_query = "select * from userdata where userName='".$_POST['userName']."'";
    $query = mysqli_query($connection, $str_query);

    $data = mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        if(($_POST['userName'] == isset($data['userName'])) 
        && ($_POST['password'] == $data['password1'])){
            $_SESSION['userNameSession'] = $_POST['userName'];
            header("location:home.php");
        }else{
            echo "Maaf Anda gagal login, pastikan username dan password sesuai<br/>";
            echo "<a href='login.php'>Login</a><br/>";
            echo "<a href='register.php'>Register</a>";
        }
    }

?>