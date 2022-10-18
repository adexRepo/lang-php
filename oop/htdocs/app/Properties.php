<?php

/* -------------------------------------------------------------------------- */
/*                                 PROPERTIES                                 */
/* -------------------------------------------------------------------------- */

/*
 * Fields / Properties / Attributes adalah data yang bisa kita sisipkan ke dalam Object
 * Namun sebelum kita bisa memasukkan data di fields, kita harus mendeklarasikan data apa aja,
 * yang dimiliki object tersebut di dalam deklarasi class nya
 * Membuat field sama seperti membuat variable, namun ditempatkan di block class dan diawali dengan kata kunci var
 */

/* -------------------------------------------------------------------------- */
/*                            MANIPULASI PROPERTIES                           */
/* -------------------------------------------------------------------------- */

/*
 * Fields yang ada di object, bisa kita manipulasi
 * Untuk memanipulasi data field, sama seperti cara pada variabel
 * Untuk mengakses field, kita butuh kata kunci -> setelah nama object dan diikuti nama fields nya 
 * 
 * lihat : Person.orang
 */

require_once '../data/Person.php';

$orang = new Orang();
// var_dump($orang); ok

$orang->name = 'Budi';
$orang->email = 'aeitiao@gmail.com';
$orang->phone = '0812-3456-7890';

echo "Name  : {$orang->name}" . PHP_EOL;
echo "Email : {$orang->email}" . PHP_EOL;
echo "Phone : {$orang->phone}" . PHP_EOL;


/* -------------------------------------------------------------------------- */
/*                         PROPERTIES TYPE DECLARATION                        */
/* -------------------------------------------------------------------------- */

/*
 * Sama seperti di function, di properties pun, kita bisa membuat type declaration
 * Ini membuat PHP otomatis mengecek tipe data yang sesuai dengan type declaration yang telah ditentukan
 * Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error
 * Ingat!, bahwa PHP memiliki fitur type juggling, yaitu fitur conversi tipe data secara otomatis.
 * Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties
 * 
 * lihat : Person.manusia
 */


$manusia1 = new Manusia();

// $manusia -> name = []; will error because name properties is string


/* -------------------------------------------------------------------------- */
/*                          DEFAULT PROPERTIES VALUE                          */
/* -------------------------------------------------------------------------- */

/*
 * Sama seperti variable, di properties juga kita bisa langsung mengisi value nya
 * Ini mirip seperti default value, jadi jika tidak diubah di object, maka properties akan memiliki value tersebut.
 * 
 * lihat : Person.manusia.country
 */

 $manusia2 = new Manusia();

    echo "Country : {$manusia2->country}" . PHP_EOL;

/* -------------------------------------------------------------------------- */
/*                             NULLABLE PROPERTIES                            */
/* -------------------------------------------------------------------------- */

/*
 * Saat kita menambah type declaration di properties atau di function argument,
 * maka secara otomatis kita tidak bisa mengirim data null ke dalam properties atau function argument tsb
 * Di PHP 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties atau function arguments
 * Caranya sebelum type declaration nya, kita bisa tambahkan tanda tanya (?)
 * 
 * lihat : Person.manusia.foodFavorite
 */

 $manusia3 = new Manusia();

 echo "Food Fav : ";
 var_dump($manusia3->foodFavorite);
 
