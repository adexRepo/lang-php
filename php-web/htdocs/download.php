<?php

if(isset($_GET['key']) && $_GET['key'] == 'rahasia')
{
    header('Content-Disposition: attachment; filename="logo.png"');
    // header('Content-Type: image/jpeg');
    readfile(__DIR__ .'/file/logo.png');
}else{
    echo "Invalid Key";
}

?>