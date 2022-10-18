<?php

/* -------------------------------------------------------------------------- */
/*                                THIS KEYWORD                                */
/* -------------------------------------------------------------------------- */

/*
 * Saat kita membuat kode di dalam function di dalam class, kita bisa menggunakan kata kunci this
 * untuk mengakses object saat ini.
 * Misal kadang kita butuh mengakses properties atau function lain di class yang sama
 * 
 * lihat di : Person.action
 */

require_once '../data/Person.php';

$action = new Action();

$action->sayWoi(null);

$action->sayWoi('djashdq@gmail.com');