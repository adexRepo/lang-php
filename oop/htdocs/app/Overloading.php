<?php

    /* -------------------------------------------------------------------------- */
    /*                                 OVERLOADING                                */
    /* -------------------------------------------------------------------------- */

    /*
     * Overloading adalah kemampuan secara dinamis membuat properties atau function
     * Ini mirip meta programming di bahasa pemrograman lain seperti Ruby
     * Namun ini berbeda dengan function overloading di bahasa pemrograman java
     * overloading versi java ialah membuat function dengan nama yang sama
     * 
     * Overloading di PHP ini erat kaitannya dengan magic function
     */

    /* -------------------------------------------------------------------------- */
    /*                           PROPERTIES OVERLOADING                           */
    /* -------------------------------------------------------------------------- */

    /*
     * Saat kita mengakses properties, maka secara otomatis properties akan diakses
     * Namun juka ternyata properties tersebut tidak tersedia di object nya, maka PHP
     * tidak secara otomatis menjadikan itu error.
     * 
     * PHP akan melakukan fallback ke magic function
     * Dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic function tsb
     * Ada beberapa magic function yang bisa digunakan untuk properties overloading
     * 
     * kita akses properties a eh ternyata gaada, lalu php bakal manggil magic function, eh ternyata gaada juga
     * baru deh php bilang kalo ini error.
     * 
     * __set($namaProperty, $value):void  => Akan dieksekusi saat mengubah properties yang tidak tersedia
     * __get($namaProperty):mixed        => Akan dieksekusi saat mengambil properties yang tidak tersedia
     * __isset($namaProperty):bool       => Akan dieksekusi saat mengecek apakah properties tersedia atau tidak
     * __unset($namaProperty):void       => Akan dieksekusi saat menghapus properties yang tidak tersedia
     * 
     * flow nya : 
     * 
     * akses data x, kalo x gaada maka akan menjalankan __get($namaProperty)
     */

    class Zero
    {
        private array $properties = [];

        public string $firstName = "Adek";

        public function __set(string $name, $value):void
        {
            echo "__set() called with property: {$name}" . PHP_EOL;
            $this->properties[$name] = $value;
        }

        public function __get(string $name):mixed
        {
            echo "__get() called with property: {$name}". PHP_EOL;
            return $this->properties[$name] ?? null;
        }

        public function __isset(string $name):bool
        {
            return isset($this->properties[$name]);
        }

        public function __unset(string $name):void
        {
            unset($this->properties[$name]);
        }

        public function __call($name, $arguments)
        {
            $join = join(',', $arguments);
            echo "__call() called with method: {$name} with argument: {$join}". PHP_EOL;
        }
        
        public static function __callStatic($name ,$arguments):void
        {
            $join = join(',', $arguments);
            echo "__call() called with method: {$name} with argument: {$join}". PHP_EOL;
        }
    }

    $zero = new Zero();
    // get
    echo "__get()" . PHP_EOL;
    echo $zero->firstName . PHP_EOL;
    echo $zero->middle . PHP_EOL; // magic function __get() called with property: middle
    
    echo PHP_EOL;
    
    // set
    echo "__set()" . PHP_EOL;
    $zero->middle = "Jhon"; // magic function __set() called with property: middle
    echo $zero->middle . PHP_EOL;
    
    echo PHP_EOL;
    // isset
    echo "__isset()" . PHP_EOL;
    echo isset($zero->middle) ? "true" : "false" . PHP_EOL; // magic function __isset() called with property: middle
    
    echo PHP_EOL;
    echo PHP_EOL;
    // unset
    echo "__unset()" . PHP_EOL;
    unset($zero->middle); // magic function __unset() called with property: middle
    echo isset($zero->middle) ? "true" : "false" . PHP_EOL; // magic function __isset() called with property: middle

    echo PHP_EOL;
    echo PHP_EOL;


    /* -------------------------------------------------------------------------- */
    /*                            FUNCTION OVERLOADING                            */
    /* -------------------------------------------------------------------------- */

    /*
     * Saat kita mengakses function, maka secara otomatis function akan diakses
     * Namun jika ternyata function tersebut tidak tersedia di object nya, maka PHP tidak secara
     * otomatis menjadikan itu error.
     * 
     * PHP akan melakukan fallback ke magic function
     * Dengan demikian kita bisa membuat Function secara dinamis dengan memanfaatkan magic function tsb
     * Ada beberapa magic function yang bisa digunakan untuk Function overloading
     * 
     * kita akses Function a eh ternyata gaada, lalu php bakal manggil magic function, eh ternyata gaada juga
     * baru deh php bilang kalo ini error.
     * 
     *  __call($namaFunction, $parameter):mixed  => akan dieksekusi saat memanggil function yang tidak tersedia
     * __callStatic($namaFunction, $parameter):mixed  => akan dieksekusi saat memanggil static function yang tidak tersedia
     * 
     * lihat di class zero
     */

    $zero2 = clone $zero;

    // call
    echo "__call()" . PHP_EOL;
    $zero2->firstName = "Adek";
    $zero2->middleName = "Kristiyanto";
    $zero2->lastName = "Dupin";

    $zero2->getFullName("Adek","tralala"); // magic function __call() called with method: getFullName with argument: Adek,Kristiyanto,Dupin

    echo PHP_EOL;

    // call static
    echo "__callStatic()" . PHP_EOL;
    Zero::getFullName("Adek","tralala"); // magic function __callStatic() called with method: getFullName with argument: Adek,tralala
