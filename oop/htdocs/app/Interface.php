<?php

/* -------------------------------------------------------------------------- */
/*                                  INTERFACE                                 */
/* -------------------------------------------------------------------------- */

/*
 * Sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan sebagai kontrak untuk class child nya
 * Namun sebenarnya yang lebih tepat untuk kontrak adalah Interface
 * Jangan salah sangka bahwa Interface disini bukanlah User Interface
 * Interface mirip seperti abstract class, yang membedakan adalah Interface, semua method otomatis abstract
 * tidak memiliki block.
 * 
 * Di Interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant
 * Untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melainkan implements
 * Dan berbeda dengan class, kita bisa implements lebih dari satu interface
 * 
 * contoh dibawah car bisa di polymorpism juga
 */

 require_once '../data/Car.php';

 use Data\{BMW};
 
    $bmw = new BMW();
    $bmw->drive();
    echo $bmw->getType() . PHP_EOL;