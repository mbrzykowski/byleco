<?php

    echo $_SERVER['SCRIPT_NAME'];
    echo $_SERVER['SERVER_PROTOCOL'];
    echo $_SERVER['DOCUMENT_ROOT'];


    //$localFile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
    $localFile = $_SERVER['DOCUMENT_ROOT'];
    $localFile =  $_SERVER['SCRIPT_NAME'];

    echo '<br>',$localFile;
    #########################################################################
    //stałe
    //nazwy z dużych liter


    define('NAME','Janusz');
    echo '<br>',NAME;

    define('surname','Anna');
    echo '<br>',surname;

    define('COUNTRY','Polska',true);
    echo '<br>',COUNtry,'<hr>';

    #########################################################################
    //stałe predefiniowane

    echo PHP_VERSION,'<br>'; //5.6.14
    echo gettype (PHP_VERSION),'<br>'; //string

    if (PHP_VERSION > 5.6) {
      echo 'Nowa Wersja PHP';
    } else {
      echo 'Stara wersja PHP<br>';
    }

    echo PHP_OS;
    echo __LINE__; //40
    echo __FILE__; //C:\Portable\xampp\htdocs\xddd\27_09.php
    echo __DIR__; //C:\Portable\xampp\htdocs\xddd









 ?>
