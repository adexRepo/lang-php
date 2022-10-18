<?php

/* -------------------------------------------------------------------------- */
/*                                    TRAIT                                   */
/* -------------------------------------------------------------------------- */

/*
 * Selain class dan interface, di PHP terdapat fitur lain bernama trait
 * Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function
 * 
 * Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu
 * 
 * Trait mirip seperti extension, dimana kita bisa menambahkan konkrit function ke dalam class dengan trait
 * Secara sederhana trait digunakan untuk menyimpan function-function yang bisa digunakan ulang di beberapa class
 * 
 * Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use
 * 
 */

    require_once '../data/SayGoodbye.php';

    use Data\Traits\{Person, Hello,Goodbye};

    $person = new Person();
    $person->Hello("Adek");
    $person->goodBye("Dupin");

/* -------------------------------------------------------------------------- */
/*                              TRAIT PROPERTIES                              */
/* -------------------------------------------------------------------------- */

/*
 * Berbeda dengan interface, di trait, kita bisa menambahkan properti ke dalam class
 * Dengan menambahkan properti, secara otomatis class tersebut akan memiliki properti yang ada di trait
 */

 $person->name = "Yeldy";
 var_dump($person->name);
 var_dump($person);
 echo $person->name . PHP_EOL;