<?php

/* -------------------------------------------------------------------------- */
/*                               STATIC KEYWORD                               */
/* -------------------------------------------------------------------------- */

/*
 * Kata kunci static adalah keyword yang bisa kita gunakan untuk membuat properties
 * atau function di class bisa di akses secara langsung tanpa menginstansiasi class terlebih dahulu
 * 
 * Namun inget, saat kita buat static properties atau function, secara otomatis hal itu tidak akan
 * berhubungan lagi dnegan class instance yang kita buat
 * 
 * Untuk cara mengakses static properties dan function yang sama seperti mengakses constant,
 * kita bisa menggunakan operator ::
 * 
 * Static function tidak bisa mengakses function bisa, karena funciton biasa menempel pada class
 * instance nya sedangkan static function tidak.
 */

 require_once '../data/MathHelper.php';

 use Helper\MathHelper;

 echo MathHelper::$name . PHP_EOL; // 3
 echo MathHelper::add(10, 20) . PHP_EOL; // 30 // langsung akses

 MathHelper::$name = 'ADEK';

    echo MathHelper::$name . PHP_EOL; // ADEK