<?php

/* -------------------------------------------------------------------------- */
/*                                  FUNCTION                                  */
/* -------------------------------------------------------------------------- */

/*
 * Selain menambahkan properties, kita juga bisa menambahkan function ke object
 * Caranya dengan mendeklarasikan function tersebut di dalam block class
 * Sama sperti function biasanya, kita juga bisa menambahan return value dan parameter
 * Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama methodnya.
 * Sama seperti mengakses properties
 * 
 */

require_once '../data/Person.php';

    $action = new Action();
    $action->sayHello('Budi');