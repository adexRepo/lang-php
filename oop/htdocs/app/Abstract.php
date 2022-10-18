<?php

/* -------------------------------------------------------------------------- */
/*                               ABSTRACT CLASS                               */
/* -------------------------------------------------------------------------- */

/*
 * Abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung,
 * hanya bisa diturunkan saja.
 * 
 * Untuk membuat sebuah class menjadi abstract, kita bisa menggunakan kata kunci abstract 
 * sebelum kata kunci class
 * 
 * Sehingga Abstract class tersebut bisa kita gunakan sebagai contract child class
 * kontract disini itu kyk kesepakatan antara abstract dgn child class nya
 */

 require_once '../data/Location.php';

 use Data\{Location, City, Province, Country};

    // $location = new Location(); // will error coz abstract
    
    $city = new City();
    $province = new Province();
    $country = new Country();

    var_dump($city);
    var_dump($province);
    var_dump($country);