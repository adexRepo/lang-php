<?php
    /* -------------------------------------------------------------------------- */
    /*                                  Form Post                                 */
    /* -------------------------------------------------------------------------- */

    /*
        * Saat kita belajar HTML, kita tahu bahasa di HTML terdapat form
        * Form biasanya digunakan untuk mengirim data dari Client ke Server
        * Secara default, method di form adalah GET, sehingga saat kita submit, data akan dikirim dalam bentuk Query Parameter yang bisa ditangkap menggunakan $_GET di PHP
        * Namun jika kita gunakan Form dengan method POST, maka secara otomatis request dari Client ke Server akan beruba HTTP POST, hal ini menyebabkan data form yang dikirim akan dikirim melalui Body, bukan Query Parameter, dan untuk menerima datanya di PHP, kita perlu menggunnakan $_POST
     */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM POST</title>
</head>
<body>
    <h1>FORM POST</h1>
    <form action="post.php" method="post">
        <label>First Name :
            <input type="text" name="first_name">
        </label>
        <label>Last Name :
            <input type="text" name="last_name">
        </label>
        <input type="submit" name="register">
    </form>
</body>
</html>