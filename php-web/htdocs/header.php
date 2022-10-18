<?php 

    /* -------------------------------------------------------------------------- */
    /*                                   Header                                   */
    /* -------------------------------------------------------------------------- */

    /*
        * Dalam HTTP request dan response, terdapat data yang bernama Header
        * Header biasanya digunakan sebagai tempat menyimpan informasi tambahan diluar URL, METHOD dan BODY
        * Di PHP, kita bisa menangkap data header yang dikirim oleh Client atau membuat header di response dari Server
     */


    /* -------------------------------------------------------------------------- */
    /*                           Menerima Header Request                          */
    /* -------------------------------------------------------------------------- */

    /*
        * Semua header yang dikirim oleh Client, secara otomatis akan dimasukkan ke global variable $_SERVER
        * Namun key untuk header akan secara otomatis di konversi menjadi UPPERCASE, dan jika terdapat spasi atau - , akan otomatis diganti menjadi _ 
        * Selain itu untuk membedakan request header dan lainnya, khusus request header, akan ditambah prefix HTTP_
        * Misal header Content-Type akan menjadi HTTP_CONTENT_TYPE
        * Header Accept-Language akan menjadi HTTP_ACCEPT_LANGUAGE
     */

    $client = $_SERVER['HTTP_CLIENT_NAME'] ?? 'undefined';

    echo "Hello $client <br>"; // ini hasilnya gaada, kalo mau ada bisa dikirim dan dilihat di postman

    // atau kita bisa ngelihat yang sudah ada / teregist di header request

    $headerDefault = $_SERVER['HTTP_USER_AGENT'];

    echo "<br>";
    echo "Header Default : $headerDefault";

    // run di 



    /* -------------------------------------------------------------------------- */
    /*                          Menambah Header Response                          */
    /* -------------------------------------------------------------------------- */

    /*
        * Kadang kita ingin menambah informasi tambahan di HTTP response
        * Seperti versi aplikasi kita atau lainnya
        * Kita juga bisa menambahkan header dengan menggunakan function header(header_key, value) di PHP
        * Perlu diingat, di spesifikasi HTTP, header berada pada posisi atas sebelum content dibuat,
        * oleh karena itu, pastikan menambah header sebelum kita membuat content
     */

    header('Application : Adek Kristiyanto');
    header('Dibuat-pada : 20220804');

    $header_baru = $_SERVER['HTTP_APPLICATION'] ?? null;
    $header_baru2 = $_SERVER['Dibuat-pada'] ?? null;

    echo "<br>";
    echo "Header Baru : $header_baru";
    echo "<br>";
    echo "Header Baru 2 : $header_baru2";
    echo "<br>";

    // * gabisa dilihat disitu gaes, lihat di inspect element aja

?>