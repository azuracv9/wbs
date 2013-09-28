<?php
session_start();
include "config.php";

$username=$_POST['username'];
$password=$_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    
    $username=htmlspecialchars(stripslashes($_POST['username']));
    $password=md5(htmlspecialchars(stripslashes($_POST['password'])));
    $cek = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
        $_SESSION['username'] = $c['username'];
        $_SESSION['password'] = $c['password'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="admin"){
            header("location:index.php?p=welcome");
        }else if($c['level']=="user"){
            header("location:index.php?p=user");
        }
    }else{
         die(header('location:index.php?message=kosong'));
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>