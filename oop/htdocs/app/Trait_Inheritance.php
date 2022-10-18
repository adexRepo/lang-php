<?php

/* -------------------------------------------------------------------------- */
/*                              TRAIT INHERITANCE                             */
/* -------------------------------------------------------------------------- */

 /*
  * Sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu
  * Lantas bagaimana dengan trait yang menggunakan trait lain?
  * Trait bisa menggunakan trait lain, mirip seperti interface yang bisa implement interface lain
  * Untuk menggunakan trait lain dari trait, penggunaannya sama seperti dengan penggunaan trait di class
  */

 require_once '../data/SayGoodbye.php';

 use Data\Traits\{Person};

 $person = new Person();
 $person->name = "Yeldy";
 $person->run();

 
 $person->Hello("Adek");
 $person->goodBye("Dupin");
