<?php

/* -------------------------------------------------------------------------- */
/*                           CONSTRUCTOR OVERRIDING                           */
/* -------------------------------------------------------------------------- */

/*
 * Karena constructor sama seperti function, maka constructor-pun bisa kita deklarasikan
 * ulang di class Childnya
 * 
 * Sebenarnya di PHP, kita bisa meng-override function dengan arguments yang berbeda,
 * namun hal ini sangat tidak disarankan
 * 
 * Jika kita melakukkan override function dengan arguments berbeda, maka PHP akan
 * menampilkan WARNING
 * 
 * Namun berbeda dengan constructor overriding, kita boleh meng-override dengan
 * mengubah argumentsnya / parameternya, namun direkomendasikan untuk memanggil
 * parent constructor.
 * 
 * lihat di data.Manager.php
 */ 