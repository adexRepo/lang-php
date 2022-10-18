<?php

/* -------------------------------------------------------------------------- */
/*                                 CONSTRUCTOR                                */
/* -------------------------------------------------------------------------- */

/*
 * Saat kita membuat Object, maka kita seperti memanggil sebuah function,
 * karena kita menggunakan kurung ()
 * 
 * Di dalam class PHP, kita bisa membuat constructor, constructor adalah function yang
 * akan dijalankan saat kita membuat object dari class tersebut.
 * 
 * Mirip seperti di function, kita bisa memberi parameter pada constructor
 * Nama constructor di PHP haruslah dengan nama __construct()
 */

require_once '../data/Person.php';

$belajar = new Belajar("Adek",null);

$belajar2 = new Belajar("Sulastri","dkkrstlral@gmail.com");

echo $belajar->name . PHP_EOL;
echo $belajar->email. PHP_EOL. PHP_EOL;

echo $belajar2->name . PHP_EOL;
echo $belajar2->email. PHP_EOL. PHP_EOL;

