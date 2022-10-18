<?php

    /* -------------------------------------------------------------------------- */
    /*                                 COVARIANCE                                 */
    /* -------------------------------------------------------------------------- */

    /*
    * Saat kita meng-override function dari parent class, biasanya di child class kita akan membuat
    * function yang sama dengan function yang ada di parent;
    * 
    * Covariance memungkinkan kita meng-override return function yang di parent dengan return value
    * yang lebih spesifik.
    * 
    * lihat di data.Animal dan AnimalShelter
    */

    require_once '../data/Animal.php';
    require_once '../data/Food.php';
    require_once '../data/AnimalShelter.php';
    
    $catShelter = new Data\CatShelter();
    $cat = $catShelter->adopt("Nekomamushi");


    $anjingShelter = new Data\AnjingShelter();
    $anjing = $anjingShelter->adopt("Inuarashi");


    /* -------------------------------------------------------------------------- */
    /*                               CONTRAVARIANCE                               */
    /* -------------------------------------------------------------------------- */

    /*
     * Sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function
     * argument yang lebih tidak spesifik dibandingkan parentnya.
     * 
     * lihat di data.Food dan data.Animal
     */

     $cat->eat(new Data\AnimalFood());

     $anjing->eat(new Data\Food());


