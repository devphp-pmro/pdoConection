<?php

    use Source\pdoConection\Conection;

    require_once __DIR__."/../vendor/autoload.php";

    $com = new Conection();

    if(!$com){
        die();
    } else{
        echo "connected";
    }
