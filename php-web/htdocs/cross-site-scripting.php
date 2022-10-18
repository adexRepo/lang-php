<?php

    /* -------------------------------------------------------------------------- */
    /*                            Cross Site Scripting                            */
    /* -------------------------------------------------------------------------- */
    
    /*
        * XSS merupakan celah keamanan yang biasanya dieksploitasi oleh penyerang dengan cara mengirim script pada parameter
        * Jika sampai pembuat kode salah melakukan render halaman web, maka script tersebut akan di render di halaman web,
        * dan bisa menyebabkan penyerang mengirimkan kode JavaScript
        * Hal ini sangat berbahaya, karena penyerang bisa mencuri session pengguna yang sedang login di web kita

        * contoh
        * name=Eko<h1><script>alert("Ups di Heck")</script><h1>
     */
    $say = "Wooi! " . $_GET['name'];
    // run server :php -S localhost:8080
    // * http://localhost:8080/htdocs/get.php?name=Adek<h1><script>alert("Ups di Heck")</script><h1>
    // atau
    // * http://localhost:8080/htdocs/get.php?name=Adek<h1>ADek<h1><script>alert("Ups di Heck")</script> <h1>Krist<h1>


    /* -------------------------------------------------------------------------- */
    /*                              Cara Mencegah XSS                             */
    /* -------------------------------------------------------------------------- */

    /*
        * Cara mencegah XSS adalah, kita perlu berhati-hati ketika ingin menampilkan text yang inputnya berasal dari user
        * Jika kita tidak berhalang sebuah text berisi tag HTML, kita menggunakan function htmlspecialchars(value)
        * Function htmlspecialchars(value) secara otomatis akan akan melakukan encode spesial character di html agar di render menjadi text biasa
        * https://www.php.net/manual/en/function.htmlspecialchars.php 
     */

    $say2 = "Wooi! " . htmlspecialchars($_GET['name']);

    // * http://localhost:8080/htdocs/cross-site-scripting.php?name=Adek<h1>ADek<h1><script>alert("Ups di Heck")</script> <h1>Krist<h1>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>
        <!--not save -->
        <!-- <?= $say ?>  --> 
        <!--save -->
        <?= $say2 ?>
    </h1>
</body>
</html>