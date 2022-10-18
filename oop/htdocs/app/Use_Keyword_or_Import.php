<?php

/* -------------------------------------------------------------------------- */
/*                                 USE KEYWORD                                */
/* -------------------------------------------------------------------------- */

/*
 * Sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant
 * di namespace kita perlu menyebutkan nama namespace nya di awal
 * 
 * Jika terlalu sering menggunakan class, function atau constant yang sama,
 * maka terlalu banyak duplikasi dengan menyebut namespace yang sama berkali-kali
 * 
 * Hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut
 * dengan menggunakan kata kunci use.
 */

require_once '../data/Conflict.php';
require_once '../data/Helper.php';

use Data\One\Conflict;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Conflict2();

help();

echo APPLICATION.PHP_EOL;


/* -------------------------------------------------------------------------- */
/*                                    ALIAS                                   */
/* -------------------------------------------------------------------------- */

/*
 * Saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan nama namespace diawal
 * class ketika ingin membuat class tersebut.
 * Namun bagaimana jika kita ingin memasukkan yang ternyata nama class nya sama?
 * Untungnya PHP memiliki fitur yang namanya alias
 * Alias adalah kemampuan membuat nama lain dari class, function atau constant yang ada.
 * Kita bisa menggunakan kata kunci as setelah melakukan use.
 * 
 * Disini sudah dicontohkan diatas di bagian Conflict2 dan Help
 */