<?php

    session_start();

    $isLogin = isset($_SESSION['login']);

    if($isLogin){
        header("Location: member.php");
        exit;
    }

    $error = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if($_POST['username'] != 'adek' || $_POST['password'] != 'adek'){
          $error = "Username or Password is invalid";
        } else {
            $_SESSION['login'] = true;
            $_SESSION['username'] = 'adek';
            header("Location: member.php");
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2><?= $error ?></h2>
    <h1>LOGIN Page</h1>
    <form action="login.php" method="post">
        <label>Username :
            <input type="text" name="username">
        </label>
        <br/>
        <label>Password :
            <input type="password" name="password">
        </label>
        <br/>
        <input type="submit" value="Login">
    </form>
</body>
</html>