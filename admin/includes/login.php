<?php

include "config.php";
if(empty($_SESSION)){
    session_start();
}
if(!isset($_POST['login'])){
    header("location: ../index.php");
}

if (isset($_POST['login'])) {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE u_name = '$name' AND u_pass = '$pass'";
    $query = mysqli_query($con, $sql);
    $rows = mysqli_fetch_array($query);

    if (!empty($name) && !empty($pass)) {
        if ($rows['u_name'] == $name && $rows['u_pass'] == $pass) {
            $_SESSION['username'] = $name;
            $_SESSION['password'] = $pass;
            header("Refresh:0.5;url=../dashboard.php");
            exit;
        } else {
            header("Refresh:0.5;url=../index.php?login=failed");
        }
    } else {
        header("Refresh:0.5;url=../index.php?login=failed");
    }
}
