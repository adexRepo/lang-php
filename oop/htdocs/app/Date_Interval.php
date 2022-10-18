<?php

    /* -------------------------------------------------------------------------- */
    /*                                DateInterval                                */
    /* -------------------------------------------------------------------------- */

    /*
    * Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misalnya hanya 
    * menambah 1 tahun, atau mengurangi beberapa hari
    * Hal ini bisa dilakukan dengan funciton add milik Date Time
    * Namun function add tersebut menerima parameter berupa DateInterval
    * Saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita 
    * menambah interval
    * 
    * Kita bisa lihat detailnya di : https://www.php.net/manual/en/class.dateinterval.php
    * atau 
    * class DateInterval {
    *            // Properties 
    *            public int $y;
    *            public int $m;
    *            public int $d;
    *            public int $h;
    *            public int $i;
    *            public int $s;
    *            public float $f;
    *            public int $invert;
    *            public mixed $days;
    *            public bool $from_string;
    *            public string $date_string;
    *            // Methods 
    *            public __construct(string $duration)
    *            public static createFromDateString(string $datetime): DateInterval|false
    *            public format(string $format): string
    *  }`

    * Y --> Year ; M --> Month ; D --> Day ; H --> Hour ; I --> Minute ; S --> Second ; F --> Microsecond
    * there is also W --> Weeks. These get converted into days, so can not be combined with D.
    * 
    * Untuk pembuatan duration, harus diawali dengan karakter P yang artinya period
    */

    $date = new DateTime();
    // var_dump($date);

    // contoh menambah 1 tahun dari tahun saat ini
    $date->add (new DateInterval("P1Y"));
    // var_dump($date);
    
    // contoh menambah 1 bulan dari bulan saat ini
    $date->add (new DateInterval("P1M"));
    // var_dump($date);

    // contoh menambah 1 hari dari hari saat ini
    $date->add (new DateInterval("P1D"));
    // var_dump($date);

    // contoh menambah 1 jam dari jam saat ini
    $date->add (new DateInterval("PT1H"));
    // var_dump($date);

    // contoh menambah 1 menit dari menit saat ini
    $date->add (new DateInterval("PT1M"));
    // var_dump($date);

    // contoh menambah 1 detik dari detik saat ini
    $date->add (new DateInterval("PT1S"));
    // var_dump($date);

    // mengurangi waktu
    $date2 = new DateTime();

    // mengurangi 1 tahun
    $minusOneYear = new DateInterval("P1Y");
    $minusOneYear->invert = true;

    // mengurangi 1 bulan
    $minusOneMonth = new DateInterval("P1M");
    $minusOneMonth->invert = true;
    $date2->add($minusOneMonth);

    $date2->add ($minusOneYear);
    var_dump($date2);