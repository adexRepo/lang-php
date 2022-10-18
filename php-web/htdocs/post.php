<?php

    /* -------------------------------------------------------------------------- */
    /*                                   $_POST                                   */
    /* -------------------------------------------------------------------------- */

    /*
        * $_POST adalah global variable yang berisikan data array yang dikirim dari Client ke Server dalam bentuk form post
        * Cara penggunaan $_POST sama seperti $_GET
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST PHP</title>
</head>
<body>
    <table>
        <tr>
            <td>First Name </td>
            <td><?= $_POST['first_name']?></td>
        </tr>
        <tr>
            <td>Last Name </td>
            <td><?= $_POST['last_name']?></td>
        </tr>
    </table>
</body>
</html>