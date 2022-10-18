<?php

/* -------------------------------------------------------------------------- */
/*                               OBJECT CLONING                               */
/* -------------------------------------------------------------------------- */

/*
 * Kadang kita ada kebutuhan untuk menduplikasi sebuah objects.
 * Biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua properties
 * di object awal ke object baru.
 * Untungnya PHP mendukung object cloning, dimana kita bisa menggunakan perintah clone untuk
 * menduplikasi object
 * Secara otomatis semua properties di object awal akan di duplikasi ke object baru.
 */


 require_once '../data/Student.php';


    $student1 = new Student();
    $student1->id = '1';
    $student1->name = 'Rizki';
    $student1->value = 100;
    $student1->setContoh('Contoh');

    var_dump($student1);

    $student2 = clone $student1; // semuanya di cloning tidak peduli dengan access modifier nya
    var_dump($student2); 


/* -------------------------------------------------------------------------- */
/*                             __clone() Function                             */
/* -------------------------------------------------------------------------- */

/*
 * Kadang menyalin semua properties bukanlah hal yang kita inginkan,
 * misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
 * Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam classnya
 * dengan nama function __clone()
 * Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
 * Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()
 * 
 * Flow:
 * $student1 => clone ke $student2 , student2 akan memanggil function __clone()
 * 
 */

// var_dump($student2);  setelah di var dump ini > maka si properties contoh akan uninitialized;











