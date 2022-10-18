<?php
 namespace{

    /* -------------------------------------------------------------------------- */
    /*                                  NAMESPACE                                 */
    /* -------------------------------------------------------------------------- */

    /*
    * Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
    * Jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan
    * jenis-jenis class
    * 
    * PHP memiliki fitur namespace, dimana kita bisa menyimpan class-class kita di dalam namespace
    * Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu
    * menyebutkan nama namespace nya.
    * 
    * Namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace
    * nama class sama tidak menjadikan error di PHP
    * 
    * contoh conflict file jika tanpa namespace: ../data/Confilct.php
    * 
    * ada 2 class yang sama: yaitu conflict
    */

    /* -------------------------------------------------------------------------- */
    /*                              MEMBUAT NAMESPACE                             */
    /* -------------------------------------------------------------------------- */

    /*
    * Untuk membuat namespace, kita bisa menggunakan kata kunci namespace
    * Jika kita ingin membuat sub namespace, kita cukup gunakkan karakter backslash (\)
    * setelah namespace sebelumnya
    */

    require_once '../data/Conflict.php';

    $classDong1 = new Data\One\Conflict();
    $classDong2 = new Data\Two\Conflict();

    //  var_dump($classDong1);
    //  var_dump($classDong2);

    /* -------------------------------------------------------------------------- */
    /*                     Function dan Constant di Namespace                     */
    /* -------------------------------------------------------------------------- */

    /*
    * Function dan Constant di Namespace
    * Selain class kita juga bisa menggunakan function dan constant di namespace
    * Dan jika kita ingin menggunakan function atau constant tersebut, 
    * kita bisa menggunakannya dengan diawali dengan nama namespace nya.
    */

    require_once '../data/Helper.php';

    echo Helper\APPLICATION.PHP_EOL;

    Helper\helpMe();

    /* -------------------------------------------------------------------------- */
    /*                              GLOBAL Namespace                              */
    /* -------------------------------------------------------------------------- */

    /*
    * Global Namespace
    * Secara default kita membuat kode di PHP sebenarnya itu disimpan di global namespace
    * Global namespace adalah namespace yang tidak memiliki nama namespace
    * 
    * lihat paling atas, ini ada di global Namespace
    */

    function functionIniDiGlobalNamespace(){
        echo 'ini di global namespace';
    }
 }