<?php

/* -------------------------------------------------------------------------- */
/*                                  GENERATOR                                 */
/* -------------------------------------------------------------------------- */

/*
 * Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan Iterator
 * Namun pembuatan Iterator secara manual sangat ribuet.
 * 
 * Untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara otomatis.
 * hanya dengan menggunakan kata kunci yield.
 */

    // TIDAK PAKAI YIELD Keyword
    function getIterator(int $max) : Iterator
    {
        $array = [];
        for ($i = 0; $i < $max; $i++) {
            if ($i % 2 == 0) {
                yield $i;
            }
        }

        return new ArrayIterator($array);
    }

    $iterator = getIterator(10);

    foreach ($iterator as $value) {
        echo $value . PHP_EOL;
    }

    echo PHP_EOL;

    // PAKAI YIELD KEYWORD
    function getGanjil(int $limit):Iterator
    {
        for ($i = 1; $i <= $limit; $i++) {
            if ($i % 2 != 0) {
                yield $i; // otomatis return sebagai iterator
            }
        }
    }

    $ganjil = getGanjil(10);

    foreach ($ganjil as $value) {
        echo $value . PHP_EOL;
    }