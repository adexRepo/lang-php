<?php
   /* -------------------------------------------------------------------------- */
   /*                            Group Use Declaration                           */
   /* -------------------------------------------------------------------------- */

   /*
   * Kadang kita butuh melakukan import banyak hal di satu namespace yang sama
   * PHP memiliki fitur group use, dimana kita bisa import beberapa class,
   * function atau constant dalam satu perintah use
   * Untuk melakukan itu, kita bisa menggunakan kurung {} 
   */

   require_once '../data/Conflict.php';
   require_once '../data/Helper.php';

   use Data\One\{Conflict, Trouble, Mess};
   use function Helper\{helpMe, helpUs};

    $classDong1 = new Conflict();
    $classDong2 = new Trouble();
    $classDong3 = new Mess();

    helpMe();
    helpUs();

    echo Helper\APPLICATION.PHP_EOL;