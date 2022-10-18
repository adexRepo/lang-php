<?php

    /* -------------------------------------------------------------------------- */
    /*                                   Session                                  */
    /* -------------------------------------------------------------------------- */

    /*
        * Session adalah mekanisme yang biasa digunakan untuk mengingat interaksi sebelumnya dari Client
        * Di spesifikasi HTTP, tidak dikenal yang namanya session, karena HTTP di desain stateless (tidak menyimpan state, data atau informasi apapun)
        * Session adalah teknik dimana kita bisa menyimpan informasi client di server, sehingga ketika ada request dari client yang sama, kita bisa tahu dari server
        * Contohnya session biasanya digunakan ketika proses login, setelah login sukses, kita akan membuat session, dan request selanjutnya dari client akan membawa informasi session tersebut
     */

    /* -------------------------------------------------------------------------- */
    /*                       Memastikan Fitur Session di PHP                      */
    /* -------------------------------------------------------------------------- */

    /*
        * Untuk menggunakan fitur session di PHP, kita harus pastikan bahwa fitur tersebut aktif, kita bisa melihatnya di phpinfo
        * https://www.php.net/manual/en/book.session.php 

        * session enable or not ada di phpinfo.php
        * http://localhost:8080/htdocs/phpinfo.php
     */

    /* -------------------------------------------------------------------------- */
    /*                                  $_SESSION                                 */
    /* -------------------------------------------------------------------------- */

    /*
        * $_SESSION adalah global variable array yang berisi data di session
        * Setelah session kita start, kita bisa menggunakan $_SESSION untuk menyimpan data di session, atau mengambil data di session
        * Jika session belum di start, perubahan yang kita lakukan di $_SESSION atau pengambilan data di $_SESSION, tidak akan berpengaruh apa-apa
    */

    session_start();

    if($_SESSION['login'] == true){
        header("Location: /session/member.php");
        exit;
    } else {
        echo "You are not logged in";
    }

    $error = "";
    if($SERVER['REQUEST_METHOD'] == "POST"){
        if($_POST['username'] != 'adek' && $_POST['password'] != 'adek'){
            $error = "Username or Password is invalid";
        } else {
            $_SESSION['login'] = true;
            $_SESSION['user_login'] = 'adek';
            header("Location: member.php");
            header('location: /session/member.php');
            exit;
        }
    }

    // lihat lengkapnya di login.php

    /* -------------------------------------------------------------------------- */
    /*                         Masalah dengan PHP session                         */
    /* -------------------------------------------------------------------------- */

    /*
        * PHP menyimpan session di File
        * Hal ini tidak direkomendasikan untuk menyimpan data yang terlalu besar di session,
        * karena setiap kita melakukan session_start, maka secara otomatis session akan di load dari file,
        * dan setelah request selesai, session akan di save di file
        * Selain itu penggunaan File menyebabkan masalah scalability, karena jika kita menjalankan 2 Web PHP
        * secara bersamaan di server yang berbeda, bisa jadi session nya menghilang ketika request 
        * dari client masuk ke server yang berbeda
        * Oleh karena itu, penggunaan fitur session di PHP sebenarnya jarang sekali digunakan di web yang sudah besar,
        * biasanya akan menggunakan alternatif lain untuk management session, seperti Secure Cookie atau JWT (Json Web Token)

        * bisa di buka di phpinfo.php
        * dibagian session-> save path

     */

?>