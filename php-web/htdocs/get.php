<?php
    /* -------------------------------------------------------------------------- */
    /*                               Query Parameter                              */
    /* -------------------------------------------------------------------------- */

    /*
        * Saat mengakses Web, kita akan menggunakan URL, dan di dalam URL, terdapat bagian yang bernama query parameter
        * Query parameter adalah informasi tambahan yang bisa kita kirimkan dari client ke server secara dinamis
        * Untuk menambahkan query parameter, cukup gunakan ? diikuti dengan key=value pada URL 
        * Di PHP, semua query parameter akan secara otomatis disimpan dalam global variable bernama $_GET
     */

    /* -------------------------------------------------------------------------- */
    /*                                    $_GET                                   */
    /* -------------------------------------------------------------------------- */

    /*
        * $_GET adalah global variable berupa array yang berisikan key sesuai dengan nama query parameter, dan value sesuai dengan value query parameter
        * Jika kita mengirim query parameter name=Eko, artinya akan ada key name di dalam $_GET yang bernilai Eko
        * Perlu diperhatikan, query parameter adalah data yang dikirim oleh client, jadi pastikan sebelum menggunakannya 
        * kita harus cek apakah datanya ada atau tidak, karena bisa jadi datanya tidak dikirim oleh client
     */

    $say = "Wooi! " . $_GET['name'];
    // run server :php -S localhost:8080
    // http://localhost:8080/htdocs/get.php?name=Adek%20Kristiyanto

    // %20 itu adalah spasi

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>
        <?= $say ?>
    </h1>
</body>
</html>