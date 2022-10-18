<?php

    /* -------------------------------------------------------------------------- */
    /*                              FORMAT DATE TIME                              */
    /* -------------------------------------------------------------------------- */

    /*
    * Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat
    * Hal ini bisa kita lakukan menggunakan function format()
    * Function format() menerima argument berupa format string, ini bisa kita gunakan untuk
    * memanipulasi cara kita menamDateTimeZone('Asia/Tokyo')pilkan format waktu
    * 
    * Untuk detailnya bisa lihat di dokumentasinya
    * https://www.php.net/manual/en/datetime.format.php
    */

    $date = new DateTime();
    $date->setDate(2022, 6, 8);

    echo $date->format('Y-m-d').PHP_EOL;
    echo $date->format('Ymd').PHP_EOL;
    echo $date->format('H:i:s').PHP_EOL;

    echo $date->format('Y-m-d H:i:s').PHP_EOL;
    echo $date->format('Ymd H:i:s').PHP_EOL;

    echo PHP_EOL;
    //* Parse DateTime
    /*
     * Selain format DateTime menjadi string, di PHP juga kita bisa melakukan hal sebaliknya,
     * yaitu memparsing string menjadi DateTime sesuai dengan format yang kita mau
     * 
     * Untuk melakukan itu kita bisa menggunakan static function createFromFormat() dari class DateTime
     */
    $date2 =  new DateTime();

    $date3 = DateTime::createFromFormat('Y-m-d', '2022-12-29', new DateTimeZone('Asia/Gaza'));


    var_dump($date2);


    echo PHP_EOL. PHP_EOL;

    $current = time();    // epoch
    $dateTime = date('r', '1660759583'); // DateTime

    var_dump($current);
    var_dump($dateTime);