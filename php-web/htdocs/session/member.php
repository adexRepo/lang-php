<?php

    session_start();

    $isLogin = $_SESSION['login'] !=  true ? true : false;

    if($isLogin){
        header("Location: login.php");
        exit;
    }

    $msg = "HELLO " . $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>LOGIN SUKSES</h1>
    <h1> <?=  $msg ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>