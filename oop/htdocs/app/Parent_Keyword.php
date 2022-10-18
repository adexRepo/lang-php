<?php

/* -------------------------------------------------------------------------- */
/*                               PARENT KEYWORD                               */
/* -------------------------------------------------------------------------- */

/*
 * Kadang kita ingin mengakses function yang terdapat di class parent yang sudah
 * terlanjur kita override di class child nya, seperti pada data.manager.php
 * 
 * untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent
 * sederhananya, parent digunakan untuk mengakses class parent
 * 
 */
 require_once '../data/Shape.php';

 use Data\{Shape,Rectangle};

 $shape = new Shape();
 echo $shape->getMiddle() . PHP_EOL;

 $rectangle = new Rectangle();

 echo $rectangle->getMiddle() . PHP_EOL; // 5
 echo $rectangle->getParentMiddle(); // 0