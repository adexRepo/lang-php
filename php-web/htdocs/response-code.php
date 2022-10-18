<?php

    /* -------------------------------------------------------------------------- */
    /*                                Response Code                               */
    /* -------------------------------------------------------------------------- */

    /*
        * Dalam spesifikasi HTTP, response dari server biasanya memiliki code, atau dikenal HTTP Response Code
        * Secara  default, di PHP, response code adalah 200 OK
        * Ada banyak sekali HTTP Response Code : https://developer.mozilla.org/id/docs/Web/HTTP/Status  
        * Dalam pembuatan website mungkin kita jarang sekali melakukan perubahan response code, namun jika nanti kita ingin membuat API menggunakan PHP, response code sangat penting digunakan

     */

    if(!isset($_GET['name']) || $_GET['name'] == ""){
        http_response_code(400);
        echo "Bad Request <br>";
        echo "Nme is required";
        exit();        
    }

    $say = "Hello " . htmlspecialchars($_GET['name']);

    // try 1 http://localhost:8080/htdocs/response-code.php
    // try 2 http://localhost:8080/htdocs/response-code.php?name=adek%20Kristiynto
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1> <?= $say ?> </h1>
</body>
</html>