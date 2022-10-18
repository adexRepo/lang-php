<?php

/* -------------------------------------------------------------------------- */
/*                              COMPARING OBJECT                              */
/* -------------------------------------------------------------------------- */

/*
 * Sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan operator == (equals)
 * dan === (identical)
 * 
 * Operator == (equals) membandingkal semua properties yang terdapat di object tersebut, dan tiap
 * property juga akan dibandingkan menggunakan == (equals)
 * 
 * Operator === (identical), maka akan membandingkan apakah object identik, artinya mengacu pada object yang sama.
 */

 
require_once '../data/Student.php';


$student1 = new Student();
$student1->id = '1';
$student1->name = 'Rizki';
$student1->value = 100;
$student1->setContoh('Contoh');

$student2 = clone $student1;
$student2->id = '1';
$student2->name = 'Rizki';
$student2->value = 100;
$student2->setContoh('Contoh');

var_dump($student1 == $student2); 
var_dump($student1 === $student2); // artinya tempat memorinya berbeda
var_dump($student1 === $student1); // true
  


