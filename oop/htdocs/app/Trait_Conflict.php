<?php

/* -------------------------------------------------------------------------- */
/*                               TRAIT CONFLICT                               */
/* -------------------------------------------------------------------------- */

/*
 * Jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut
 * maka hal tersebut akan menyebabkan konflik.
 * 
 * Jika terjadi conflict seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof
 */

 trait A{
    function doA():void
    {
        echo "A" . PHP_EOL;
    }

    function doB():void
    {
        echo "B" . PHP_EOL;
    }
 }

 trait B{
    function doA():void
    {
        echo "a" . PHP_EOL;
    }

    function doB():void
    {
        echo "b" . PHP_EOL;
    }
 }

 class sample {
    use A,B{
        B::doA insteadof A; // untuk function doA itu ambil dari function yang ada di trait B
        A::doB insteadof B; // untuk function doB itu ambil dari function yang ada di trait A
    }
 }

    $sample = new sample();

    $sample->doA(); // a
    $sample->doB(); // B