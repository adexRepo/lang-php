<?php

    /* -------------------------------------------------------------------------- */
    /*                               MAGIC FUNCTION                               */
    /* -------------------------------------------------------------------------- */

    /*
    * Magic function adalah function-function yang sudah ditentukan kegunaannya di PHP
    * Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaanya
    * 
    * Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai
    * constrocutor, __destruct() sebagai destructor, __clone() sebagai clone, __toString() sebagai
    * toString, __set() sebagai set, __get() sebagai get, __call() sebagai call, __callStatic() sebagai
    * callStatic, __isset() sebagai isset, __unset() sebagai unset, __sleep() sebagai sleep, __wakeup() sebagai
    * wakeup, __invoke() sebagai invoke, __set_state() sebagai setState, __clone() sebagai clone, __debugInfo() sebagai
    * debugInfo, __sleep() sebagai sleep, __wakeup() sebagai wakeup, __toString() sebagai toString, __invoke() sebagai
    * invoke, __set() sebagai set, __get() sebagai get, __call() sebagai call, __callStatic() sebagai callStatic,
    * __isset() sebagai isset, __unset() sebagai unset, __sleep() sebagai sleep, __wakeup() sebagai wakeup, __debugInfo() sebagai
    * debugInfo, __toString() sebagai toString, __invoke() sebagai invoke, __set() sebagai set, __get() sebagai get, __call() sebagai
    * call, __callStatic() sebagai callStatic, __isset() sebagai isset, __unset() sebagai unset, __sleep() sebagai sleep, __wakeup() sebagai
    * wakeup, __debugInfo() sebagai debugInfo, __toString() sebagai toString, __invoke() sebagai invoke, __set() sebagai set, __get() sebagai
    * 
    * wkwkwk banyak ya ..
    * 
    * Masih banyak magic function lainnya, lengkapnya di :
    * 
    * https://www.php.net/manual/en/language.oop5.magic.php
    * 
    * Dibawah ini akan dibahas yang sering dipakai saja
    */


    /* -------------------------------------------------------------------------- */
    /*                            __toString() Function                           */
    /* -------------------------------------------------------------------------- */
    /*
    * __toString function merupakan salah satu magic function yang digunakan sebagai representasi string sebuah object
    * Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString();
    * maka secara otomatis saat string itu dibuat __toString yang ada di class student (nama class nya) akan dipanggil
    * 
    * lihat student __toString
    */

    require_once '../data/Student.php';


    $student1 = new Student();
    $student1->id = '1';
    $student1->name = 'Rizki';
    $student1->value = 100;
    $student1->setContoh('Contoh'); 
    
    $string = (string) $student1; // ini artinya yang akan dipanggil function __toString

    echo $string;
    echo PHP_EOL;
    echo PHP_EOL;
    
    
    /* -------------------------------------------------------------------------- */
    /*                             __invoke() Function                            */
    /* -------------------------------------------------------------------------- */

    /*
    * __invoke merupakan function yang akan di eksekusi ketika object yang kita buat dianggap sebagai function
    * Misal ketika kita membuat object $student, lalu kita melakukan $student(), maka secara otomatis function
    * __invoke() yang ada di class student akan di eksekusi
    */

    $student2 = clone $student1;

    $student2(1,3,"MALAS",true);
    echo PHP_EOL;
    echo PHP_EOL;
    $student2();


    /* -------------------------------------------------------------------------- */
    /*                           __debugInfo() Function                           */
    /* -------------------------------------------------------------------------- */

    /*
    * sebelumnya kita sering melakukan variable menggunakan function var_dump()
    * Function var_dump() sebenarnya memanggil function __debugInfo()
    * Jika kita ingin mengubah isi dari debugInfo, kita bisa membuat function __debugInfo()
    */

   echo PHP_EOL;
   echo PHP_EOL;
   
   $student3 = clone $student1;

   var_dump($student3);
