<?php

    /* -------------------------------------------------------------------------- */
    /*                          Multiple Query Parameter                          */
    /* -------------------------------------------------------------------------- */

    /*
        * Query parameter di URL bisa memiliki banyak parameter
        * Jika kita ingin mengirim banyak query parameter, kita cukup gunakan tanda & diikuti dengan query parameter selanjutnya
     */


    $say = "Wooi! " . $_GET['first_name'] . " " . $_GET['last_name'];
    // run server :php -S localhost:8080
    // http://localhost:8080/htdocs/get-multiple.php?first_name=Adek&last_name=Kristiyanto

    // & pembatas antar query parameter
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET Multiple</title>
</head>
<body>
    <h1>
        <?= $say ?>
    </h1>
</body>
</html>