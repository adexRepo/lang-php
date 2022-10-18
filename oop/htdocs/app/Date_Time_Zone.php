<?php

/* -------------------------------------------------------------------------- */
/*                                DateTimeZone                                */
/* -------------------------------------------------------------------------- */

    /*
    * Saat kita membuat object Date Time, dia akan secara otomatis membuat waktu saat ini
    * sesuai dengan timezone yang di setting di konfigurasi date.timezone di file php.ini
    * Atau kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime
    */

    $date = new DateTime(); // time zone ini mengikuti tempat kita running app
    $date->setTimeZone(new DateTimeZone('Asia/Tokyo')); // set time zone jakarta

    var_dump($date);
