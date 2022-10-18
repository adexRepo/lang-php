<?php

/* -------------------------------------------------------------------------- */
/*                              OBJECT ITERATION                              */
/* -------------------------------------------------------------------------- */

/*
 * Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties
 * yang terdapat di object tersebut menggunakan for each
 * Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
 * Secara default, hanya properties yang public yang bisa diakses oleh foreach
 */

    class Data implements IteratorAggregate
    {
        var string $first = 'First';
        public string $second = 'Second';
        private string $third = 'Third';
        protected string $fourth = 'Forth';

        public function getIterator(): Traversable
        {
            // BISA GINI
            // membuat iterator secara manual agar yang private dan protected bisa diakses
            // $array = 
            // [
            //     'first' => $this->first,
            //     'second' => $this->second,
            //     'third' => $this->third,
            //     'fourth' => $this->fourth
            // ];

            // return new ArrayIterator($array);


            // BISA GINI JUGA
            yield 'first' => $this->first;
            yield 'second' => $this->second;
            yield 'third' => $this->third;
            yield 'fourth' => $this->fourth;
        }
    }

    $data = new Data();

    foreach ($data as $properties => $value) {
        echo $properties . ' : ' . $value . PHP_EOL;
    }

/* -------------------------------------------------------------------------- */
/*                                  ITERATOR                                  */
/* -------------------------------------------------------------------------- */

/*
 * Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
 * Jika kita ingin menangani hal ini secara manuial, kita bisa menggunakan iterator.
 * 
 * Iterator adlaah interface yang digunakan untuk melakukan iterasi, namun membuat iterator secara manual
 * lumayan cukup ribet, oleh karena itu sekarang kita gunakan ArrayIterator, yaitu
 * iterator yang menggunakan array sebagai data iterasinya.
 * 
 * Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface
 * IteratorAggregate, disana kita hanya butuh mengoveride function getIterator() yang
 * mengembalikan data iterator yang kita inginkan.
 */