<?php

    /* -------------------------------------------------------------------------- */
    /*                           Global Variable SERVER                           */
    /* -------------------------------------------------------------------------- */
    /*
        * Di PHP, terdapat global variable bernama $_SERVER
        * $_SERVER merupakan array yang berisikan informasi seperti HTTP Header, path, lokasi script php, dan lain-lain
        * $_SERVER dibuat ketika ada request masuk, sehingga bisa jadi tiap request akan berbeda isinya
        * Beberapa key yang ada di $_SERVER mengikuti spesifikasi RFC 3875 - The Common Gateway Interface (CGI) Version 1.1 : https://tools.ietf.org/html/rfc3875 
     */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBAL SERVER</title>
</head>
<body>
    <h1>GLOBAL SERVER</h1>
    <table border="1">
        <?php foreach ($_SERVER as $key => $value) : ?>
            <tr>
                <td style="background-color:antiquewhite"><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>