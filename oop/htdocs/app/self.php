<?php

/* -------------------------------------------------------------------------- */
/*                           Properties vs Constant                           */
/* -------------------------------------------------------------------------- */

/*
 * Saat kita membuat object, properties yang terdapat di class akan secara otomatis dibuat per object,
 * oleh karena itu, untuk mengakses properties, kita perlu menggunakan object, atau jika dari dalam object tersebut sendiri
 * kita perlu menggunkakan kata kunci this.
 * 
 * Sedangkan berbeda dengan constant, constant di class tidak akan dibuat per object.
 * Constatnt itu hidupnya di class, bukan di object, oleh karena itu untuk mengaksesnya kita perlu menggunakan
 * NamaClass::NamaConstant
 * 
 * secara sederhana, properties akan dibuat satu per instance class(object), sedangkan constant dibuat satu per class
 */

/* -------------------------------------------------------------------------- */
/*                                SELF KEYWORD                                */
/* -------------------------------------------------------------------------- */

/*
 * Jika di dalam class (misal di function) kita ingin mengakses constant,
 * kita perlu menggunakan NamaClass::NamaConstant
 * Namun jika di dalam class yang sama, kita bisa menggunakan kata kunci self untuk mempermudah.
 */


require_once '../data/Person.php';

$action = new Action();

$action->info();