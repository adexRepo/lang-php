<?php

/* -------------------------------------------------------------------------- */
/*                              ABSTRACT FUNCTION                             */
/* -------------------------------------------------------------------------- */

/*
 * Saat kita membuat class yang abstract, kita bisa membuat abstract function juga
 * di dalam class abstract tersebut.
 * 
 * Saat kita membuat sebuah abstract function, kita tidak boleh membuat block function
 * untuk function tersebut.
 * 
 * Artinya, abstract function wajib di override di class child
 * 
 * Abstract function bisa mengandung block function, tidak boleh memiliki access modifier private
 * 
 */

 require_once '../data/Animal.php';

    use Data\{Animal, Cat, Anjing};

    $cat = new Cat();
    $cat->name = "Nekomamushi";
    $cat->run();
    $anjing = new Anjing();
    $anjing->name = "Inuarashi";
    $anjing->run();