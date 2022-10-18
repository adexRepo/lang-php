<?php

/* -------------------------------------------------------------------------- */
/*                               MEMBUAT OBJECT                               */
/* -------------------------------------------------------------------------- */

/*
 * Object adalah hasil instansiasi dari sebuah class
 * Untuk membaut object kita bisa mengguankan kata kunci new, dan diikuti dengan nama class dan kurung () 
 */

require_once "../data/Person.php";

$person1 = new Person();
$person2 = new Person();
$person3 = new Person();

var_dump($person1);

// result :
// object(Person)#1 (0) {
// }