<?php

/* -------------------------------------------------------------------------- */
/*                             FUNCTION OVERRIDING                            */
/* -------------------------------------------------------------------------- */

/*
 * Function Overriding adalah kemampuan mendeklarasikan ulang function di child class
 * yang sudah di ada di parent class
 * 
 * Saat kita melakukan proses ovverriding tersebut, secara otomatis ketika kita membuat
 * object dari class child, function yang ada di class parent,tidak bisa diakses lagi
 * 
 * Override ini tujuannya untuk memodifikasi ulang function yang ada di parent
 */


require_once '../data/manager.php';

$manager = new Manager();

$manager->name = "Adex";
$manager->sayHello("Manager");

$vp = new vicePresident();

$vp->name = "Robert";
$vp->sayHello("Vice President");

