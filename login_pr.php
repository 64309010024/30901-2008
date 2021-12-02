<?php
    session_start();
    $username=$_POST['usname'];
    $pass=$_POST['psw'];

    if($username=="hikari" and $pass=="777"){
        $_SESSION['user']=$username;
        $_SESSION['name']="(Praewa Teankachon)";
        header("location:index.php");
    }else{
        header("location:login.php");
    }
?>