<?php

    /* -------------------------------------------------------------------------- */
    /*                            Integrasi dengan HTML                           */
    /* -------------------------------------------------------------------------- */

    /*
        * PHP adalah bahasa pemrograman yang secara default terintegrasi dengan baik dengan bahasa markup HTML
        * Dengan integrasi PHP dan HTML, kita bisa membuat web HTML yang dinamis, dalam artian tidak statis dan bisa berubah-ubah sesuai dengan logika kode program kita
        * Secara default ketika kita menggunakan kode <? dan diakhir ?>, artinya di dalamnya kita bisa memasukkan kode PHP, namun diluar kode tersebut, kita bisa memasukkan kode HTML seperti biasa
     */

     /* -------------------------------------------------------------------------- */
     /*                                  Kode <?=                                  */
     /* -------------------------------------------------------------------------- */
     /*
        * Kadang saat integrasi PHP dan HTML, kita sering sekali melakukan kode sederhana seperti ini :
            * <?php echo $title ?>
            * <?php echo $body ?>
        * Hal itu bisa dipersingkat menggunakan tanda <?=, misal :
            * <?= $title ?>
            * <?= $body ?>
      */

    /* -------------------------------------------------------------------------- */
    /*                              Tidak Hanya HTML                              */
    /* -------------------------------------------------------------------------- */
    /*
        * Walaupun secara default, PHP terintegrasi dengan HTML, namun bukan berarti hanya bisa membuat content HTML yang dinamis
        * PHP bisa mengembalikan konten apapun, seperti CSS, JavaScript, Image, Video dan lain-lain
     */

    $title = "Hello PHP dan HTML";
    $body = "Helloheloo"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <!-- Cara 1 -->
    <h1><?php echo $body ?></h1> 

    <!-- Cara 2 -->
    <h1><?=  $body ?></h1>
</body>
</html>