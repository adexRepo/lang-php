<?php

/* -------------------------------------------------------------------------- */
/*                                  Exception                                 */
/* -------------------------------------------------------------------------- */

/*
 * Saat kita membuat aplikasi, kita tidak akan terhindar dari error
 * Di PHP, Error direpresentasikan dengan istilah exception, dan semua direpresentasikan dalam 
 * bentuk class exception
 * 
 * Kita bisa menggunakan class exception sendiri, atau menggunakan yang sudah di sediakan oleh PHP
 * 
 * Jika kita ingin membuat exception, maka kita harus membuat class yang implement interface
 * Throwable atau turunan-turunannya.
 * 
 * lihat di : ValidationException.php
 * 
 * cara menggunakannya yaitu dengan memanggil saat error
 */


 require_once '../exception/ValidationException.php';
 require_once '../data/loginRequest/Login_Request.php';
 require_once '../data/loginRequest/Validation.php';

    $loginRequest = new LoginRequest();

    // $loginRequest->username ='admin';
    // $loginRequest->password ='admin';

    // ValidateLoginRequest($loginRequest);

    // echo "VALID";

    /* -------------------------------------------------------------------------- */
    /*                                  Try Catch                                 */
    /* -------------------------------------------------------------------------- */

    /*
     * Saat kita memanggil sebuah funciton yang bisa menyebabkan exception, maka kita disarankan
     * menggunakan try-catch expression di PHP
     * 
     * Ini gunanya agar kita bisa menangkap exception yang terjadi, karena jika tidak ditangkap
     * lalu terjadi exception, maka secara otomatis program kita akan berhenti.
     * 
     * Cara menggunakan try-catch expression di PHP yaitu, di block try, kita tinggal panggil
     * method yang bisa menyebabkan exception, dan di block catch, kita bisa melakukan sesuatu
     * jika terjadi exception.
     */

    // try {
    //     $loginRequest->username ='';
    //     $loginRequest->password ='admin';

    //     ValidateLoginRequest($loginRequest);
    //     echo "Validation Success";
    //  } catch (ValidationException | Exception $error) {
    //     echo "Validation error! ".$error->getMessage();
    //  }


    /* -------------------------------------------------------------------------- */
    /*                               Finally Keyword                              */
    /* -------------------------------------------------------------------------- */

    /*
     * Dalam try-catch, kita bisa menambahkan block finally
     * Block finally ini adalah block dimana akan selalu dieksekusi baik terjadi exception ataupun tidak
     * Ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses atau gagal, misal di
     * block try kita ingin membaca file, di block catch kita akan tangkap jika terjadi error, dan di block
     * finally error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut, agar
     * tidak menggantung di memori
     */


    // try {
    //     $loginRequest->username ='admin';
    //     $loginRequest->password ='admin';

    //     ValidateLoginRequest($loginRequest);
    //     echo "Validation Success" . PHP_EOL;
    //  } catch (ValidationException | Exception $error) {
    //     echo "Validation error! ".$error->getMessage(). PHP_EOL;
    //  }finally{
    //     echo "Error atau tidak akan selalu di eksekusi ". PHP_EOL;
    //  }

    /* -------------------------------------------------------------------------- */
    /*                               Debug Exception                              */
    /* -------------------------------------------------------------------------- */
    /*
     * Exception di PHP memiliki sebuah funciton bernama getTrace()
     * Function getTrace() berisikan informasi dari exception yang terjadi, seperti lokasi file
     * baris ke berapa, function dimana sampai argumenty yang dikirim di function tersebut apa
     * 
     * Ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception
     * 
     * getTrace itu balikannya array
     */

    try {
        $loginRequest->username ='';
        $loginRequest->password ='admin';

        ValidateLoginRequest($loginRequest);
        echo "Validation Success" . PHP_EOL;
     } catch (ValidationException | Exception $error) {
        echo "Validation error! ".$error->getMessage(). PHP_EOL;

        // debug error
        // var_dump($error->getTrace()); // bisa gini
        echo $error->getTraceAsString() . PHP_EOL; // bisa gini juga
     }finally{
        echo "Error atau tidak akan selalu di eksekusi ". PHP_EOL;
     }