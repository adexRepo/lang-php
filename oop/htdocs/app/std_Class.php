<?php

/* -------------------------------------------------------------------------- */
/*                                  stdClass                                  */
/* -------------------------------------------------------------------------- */

/*
 * stdClass adalah class kosong bawaan dari PHP
 * stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
 * stdClass sangat berguna ketika misalnya kita ingin melakukan konversi dari tipe data array
 * ke object secara otomatis.
 */

    $array =[
            'name' => 'ADEK',
            'age' => '20',
            'address' => 'Jakarta'
    ];

    var_dump($array);

    echo PHP_EOL;

    $object = (object) $array; // proses convert dari array ke object

    var_dump($object); // dari class stdClass (mungkin standart class)

    echo $object->name . PHP_EOL; // ADEK
    echo $object->age . PHP_EOL; // 20
    echo $object->address . PHP_EOL; // Jakarta

    $array2 = (array) $object; // proses convert dari object ke array

    var_dump($array2);

    echo PHP_EOL;

    require_once '../data/Person.php';

    $belajar = new Belajar('ADEK', 'dkkrstnt');
    var_dump($belajar);

    $array3 = (array) $belajar; // proses convert dari object ke array

    var_dump($array3);