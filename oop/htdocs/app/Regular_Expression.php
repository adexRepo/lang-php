<?php

    /* -------------------------------------------------------------------------- */
    /*                             Regular Expression                             */
    /* -------------------------------------------------------------------------- */

    /*
     * PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman Perl
     * Regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string
     * menggunakan pola tertentu
     * 
     * Materi ini sebenarnya sangat panjang, sehingga hanya dibahas pengenalannya saja
     * Untuk pembuatan pattern di regex lengkapnya di :
     * https://www.php.net/manual/en/pcre.pattern.php
     * https://www.regular-expressions.info/tutorial.html
     * 
     * contoh beberapa
     * 
     * preg_match($pattern, $subject, $matches, $flags, $offset));  => Digunakan untuk mencari match pattern
     * preg_match_all($pattern, $subject, $matches);                => Digunakan untuk mencari match pattern
     * 
     * preg_replace($pattern, $replacement, $subject);              => Digunakan untuk mereplace semua pattern dengan replacement
     * 
     * preg_split($pattern, $subject);                              => Digunakan untuk memoting dengan pattern menjadi array
     */

    // * match

    $string = "Adek Kristiyanto";
    $pattern = "/Adek/";
    $pattern2 = "/Adek/i";
    $pattern3 = "/Adek|Krist|yanto/i";
    $matches = [];

    $result = (bool)preg_match_all($pattern3, $string, $matches);
    // $result = preg_match_all("/adek|krist|yanto/i", "Adek Kristiyanto", $matches);

    var_dump($result);
    var_dump($matches);


    // * replace

    // $string2 = "Anjing lu, bangsat, tai, goblok, tolol lu, dasar hewan!!!";
    $string2 = "wkwkwk, dasar goblok , gitu aja nangis";
    $pattern2 = "/anjing|bangsat|goblok|tai|tolol/i";
    $result2 = preg_replace($pattern2, "****", $string2);

    var_dump($result2);

    // * split
    $string3 = "Adek Kristiyanto Founder,Apple-Store";
    $pattern3 = "/[\s,-]/"; // "\s" > artinya spasi biasa atau tab , lalu , koma atau - akan di replace
    $result3 = preg_split($pattern3, $string3);

    var_dump($result3);
