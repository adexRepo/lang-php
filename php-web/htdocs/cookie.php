<?php

    /* -------------------------------------------------------------------------- */
    /*                                   Cookie                                   */
    /* -------------------------------------------------------------------------- */

    /*
        * Cookie adalah data dalam bentuk key-value yang dikirim oleh Server pada
        * HTTP Response untuk disimpan di Client (Web Browser)
        * Ketika Web Browser menerima cookie, secara otomatis, request selanjutnya
        * cookie tersebut akan dikirim di setiap HTTP Request yang dilakukan ke Server
        * https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies 

        * SIMPLE NYA : 
        *  buat coockie di Php
        *  dikirim melalui http reqspond
        *  saat browser menerima, browser akan menyimpan di browser
        *  request selanjutnya browser akan requestnya bersamaan dengan cookie nya 
        *  jadi cookie akan selalu di bawa setiap request

        * Cookie di PHP berbeda dengan javascript yang pakai header
     */


    /* -------------------------------------------------------------------------- */
    /*                                Cookie di PHP                               */
    /* -------------------------------------------------------------------------- */

    /*
        * Untuk membuat cookie di PHP, kita bisa menggunakan function setcookie(...)
        * https://www.php.net/manual/en/function.setcookie.php

        * setcookie(
        *     string $name,             // kyk key
        *     string $value = "",       // ini valuenya
        *     int $expires_or_options = 0, // misal 30 hari, maka akan di expire dalam 30 hari
        *     string $path = "",        // path yang dapat mengakses cookie tsb
        *     string $domain = "",      // cookie yang dapat diakses di domain tertentu
        *     bool $secure = false,     // kalo true pakai https
        *     bool $httponly = false    // kalo true cookie hanya bisa dibaca oleh php javascript tidak bisa
        *                               //disarankan true
        * ): bool


        * Cookie merupakan bagian dari HTTP Header, jadi pastikan cookie dibuat sebelum
        * content di render di PHP
        * Untuk membaca cookie yang dikirim oleh client, kita bisa menggunakan global
        * variable $_COOKIE
        * https://www.php.net/manual/en/reserved.variables.cookies.php 

     */

    setcookie('X-BELAJAR-COOKIE', 'ini adalah cookie yang dibuat oleh adex');

    header('Location: show-cookie.php');


    /* -------------------------------------------------------------------------- */
    /*                        Hati-Hati Menggunakan Cookie                        */
    /* -------------------------------------------------------------------------- */

    /*
        * Jangan terlalu banyak data di cookie, karena semua data di cookie akan selalu
        * dikirim di tiap HTTP Request, semakin banyak, semakin lambat karena data yang harus dikirim banyak
        * Cookie bisa diubah oleh user, jadi jangan mudah percaya dengan isi cookie,
        * misal menyimpan informasi hak akses di cookie

        * jangan menyimpan data di cookie seperti auth admin atau bukan, query, password, data sensitif intinya
     */


?>
