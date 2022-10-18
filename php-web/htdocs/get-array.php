<?php

    /* -------------------------------------------------------------------------- */
    /*                            Query Parameter Array                           */
    /* -------------------------------------------------------------------------- */

    /*
        * Secara default, query parameter berisikan data key=value, artinya 1 key akan berisi 1 value
        * di PHP ada kemampuan untuk mengirim query parameter dengan data lebih dari satu
        * Data tersebut akan otomatis dikonversi menjadi Array oleh PHP
        * Caranya adalah kita wajib menambahkan tanda [] diakhir nama query parameter nya
        * Dan kita bisa menambah query parameter dengan nama yang sama berkali-kali, misal
        * name[]=Eko&name[]=Budi&name[]=Joko, maka secara otomatis parameter name akan berisi [Eko, Budi dan Joko]
     */

    $numbers = $_GET['numbers'];
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }

    //http://localhost:8080/htdocs/get-array.php?numbers[]=1&numbers[]=2&numbers[]=3&numbers[]=4&numbers[]=5
    // 1 + 2 + 3 + 4 + 5 = 15
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET Multiple</title>
</head>
<body>
    <h1>
        <?= "Total = $total" ?>
    </h1>
</body>
</html>