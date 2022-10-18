<?php

/* -------------------------------------------------------------------------- */
/*                              TRAIT OVERRIDING                              */
/* -------------------------------------------------------------------------- */

/*
 * Trait Abstract Overriding
 * Selain konkrit function, di trait juga kita bisa menambahkan abstract function
 * Jika terdapat abstract function di trait, maka secara otomatis function tersebut
 * harus di overriding di class yang menggunakan trait tersebut.
 */

    require_once '../data/SayGoodbye.php';

    use Data\Traits\{Person};

    $person = new Person();
    $person->name = "Yeldy";
    $person->run();

 /*
  * Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait,
  * maka secara otomatis trait akan mengoverride function tersebut.
  * Namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akan
  * meng-override function di trait.
  * Sehingga posisinya seperti ParentClass = override by => Trait = override by => ChildClass
  */

  $person->Hello("Adek");
  $person->goodBye("Dupin");

  /* -------------------------------------------------------------------------- */
  /*                              TRAIT VISIBILITY                              */
  /* -------------------------------------------------------------------------- */

 /*
  * Selain melakukan override function di class kita juga bisa melakukan override visibility function
  * yang terdapat di trait
  * Namun untuk melakukan ini itdak perlu membuat function baru di class, kita bisa gunakan 
  * secara sederhana ketika menggunakan trait nya  
  */  

