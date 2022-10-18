<?php

/* -------------------------------------------------------------------------- */
/*                              ANONYMOUS  CLASS                              */
/* -------------------------------------------------------------------------- */

/*
 * Anonymous class atau class tanpa nama
 * Adalah kemampuan mendeklarasikan class, sekaligus meng-instansiasi object-nya secara langsung.
 * Anonymous class sangat cocok saat kita berhadapan dengan kasus membuat implementasi
 * interface atau abstract class sederhana, tanpa harus membuat implementasi classnya.
 * 
 * saat bikin interface / abstract kan buat ngecheck nya harus pakai child class nya dulu tuh, agak ribet
 * jadi bisa pakai anonymous class aja, tapi ini tidak disarankan untuk case yang sudah kompleks. 
 * 
 * lihat di data.HelloWorld.php
 */

    require_once '../data/HelloWorld.php';

    // tanpa anonymous class
    $sample = new SampleHelloWorld();


    // dengan anonymouse
    $helloWorld->sayHello();

/* -------------------------------------------------------------------------- */
/*                       CONSTRUCTOR IN ANONYMOUSE CLASS                      */
/* -------------------------------------------------------------------------- */

/*
 * Anonymous class juga mendukung constructor
 * Jadi kita bisa menambahkan constructor jika kita mau
 */

 echo $helloWorld2->getName() . PHP_EOL; // ADEK