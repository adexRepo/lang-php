<?php

    /* -------------------------------------------------------------------------- */
    /*                                Download File                               */
    /* -------------------------------------------------------------------------- */

    /*
        * Saat membuat web, kadang-kadang kita butuh mengembalikan content
        * berupa file yang butuh di download oleh client
        * Sebenarnya, kita bisa langsung mengakses file tersebut melalui URL,
        * namun kita kita mau, kita juga bisa menggunakan PHP untuk membuat content
        * dalam bentuk file dan memaksa client untuk mendownload nya
     */

    /* -------------------------------------------------------------------------- */
    /*                            Download File di PHP                            */
    /* -------------------------------------------------------------------------- */

    /*
        * Memaksa client untuk melakukan download file, sebenarnya sudah ada di standard HTTP Header,
        * ini menggunakan Content-Disposition :
        * https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Disposition 
        * Jadi di PHP kita cukup dengan menambahkan header tersebut, maka kita bisa secara otomatis
        * memaksa browser untuk download file yang kita buat menggunakan PHP
        * Untuk membaca file dan me-load nya di PHP, kita bisa menggunakan function readfile(filename)
        * : https://www.php.net/manual/en/function.readfile.php 

     */

    header('Content-Disposition: attachment; filename="download.html"');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Download HTML</title>
</head>
<body>
    <h1>DOWNLOAD HTML</h1>
</body>
</html>