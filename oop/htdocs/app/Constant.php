<?php

/* -------------------------------------------------------------------------- */
/*                                  CONSTANT                                  */
/* -------------------------------------------------------------------------- */

/*
 * Properties di class bisa diubah, mirip seperti variable
 * Di class juga kita membuat constant, data yang tidak bisa diubah
 * Di materi PHP dasar, kita belajar untuk membuat constant itu perlu menggunakan function define()
 * Namun sejak PHP 7.4, kita bisa menggunakan kata kunci const untuk membuat constant, mirip
 * seperti variable, namun tidak menggunakan karakter $
 * 
 * constant di class sama saja.
 */

define("NAMA_LENGKAP1", "adek Kristiyanto");
const NAMA_LENGKAP2 = "Adek Kristiyanto";

echo NAMA_LENGKAP1 . PHP_EOL;
echo NAMA_LENGKAP2 . PHP_EOL;

echo PHP_EOL;
/* -------------------------------------------------------------------------- */
/*                       CARA AKSES CONSTANT DARI CLASS                       */
/* -------------------------------------------------------------------------- */

require_once '../data/Person.php';

echo "umur : " . Action::umur . PHP_EOL;