<?php

/* -------------------------------------------------------------------------- */
/*                                GETTER SETTER                               */
/* -------------------------------------------------------------------------- */

/*
 * Encapsulasi
 * Encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
 * Hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik , aman dan valid
 * Unutk mencapai ini, biasanya kita akan membuat sebuah properties menggunakan access modifier private
 * sehingga tidak bisa diakses atau diubah dari luar
 * 
 * Agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties tersebut.
 */

/*
 * Getter Setter
 * Di PHP, proses encapsulasi sudah dibuat standarisasinya, dimana kita bisa menggunakan Getter dan Setter method
 * Getter adalah function yang dibuat untuk mengambil data field
 * Setter adalah function untuk mengubah data field.
 * 
 * khusus boolean : Getternya => isNamaField(): bool || Setternya => SetNamaField(bool) 
 * 
 * lihat di data.Category
 */

 require_once '../data/Category.php';
 
 use Data\Category;

    $category = new Category();

    $category->setName('Komputer');
    $category->setExpensive(false);

    $category->setName(''); // kena validasi

    echo $category->getName() . PHP_EOL;
    echo $category->isExpensive() . PHP_EOL; // if true return 1 else return ''

    var_dump($category->isExpensive());