<?php

    /* -------------------------------------------------------------------------- */
    /*                                  DATE TIME                                 */
    /* -------------------------------------------------------------------------- */

    /*
    * Biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi data waktu, termasuk di php
    * Di PHP, kita bisa menggunakan class DateTime untuk memanipulasi waktu
    * Ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data waktu
    */

    /* -------------------------------------------------------------------------- */
    /*                              DateTime Function                             */
    /* -------------------------------------------------------------------------- */

    /*
    * setTime($hour, $minute, $second)      | unutk mengubah Data Time (by default waktu saat ini)
    * setDate($year, $month, $day)          | untuk mengubah Data Date (by default tanggal saat ini)
    * setTimestamp($unixTime)               | untuk mengubah Data unix DateTime (by default DateTime saat ini)
    */

    $date = new DateTime();
    //* saat baru di install dan belum diset maka bisa buka direktori C:\xampp\php\php.ini
    //* lalu search timezone di file php.ini >> default nya Europe/Berlin 
    //* anda bisa mengubah menjadi Asia/Jakarta (jika dijakarta)
    //* ada di dokumentasi nya

    var_dump($date);
    echo PHP_EOL;
    

    $date->setDate(1998, 6, 8);
    var_dump($date);

    $date->setTime(12, 30, 45);
    var_dump($date);

    $date->setTimestamp(strtotime('now'));
    var_dump($date);