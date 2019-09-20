<?php

    $potega = 2 ** 10;
    echo $potega,'<hr>';

//operatory bitowe: and &, or |, not ~, xor ^, >>, <<

    $x = 0b1010;
    $x = $x >> 1;
    $x = $x << 2;
    echo $x;

    ##########################################################################


    $x = 1;
    $y = 1.0;
    echo gettype($x),'<br>';
    echo gettype($y),'<br>';

    if ($x == $y)
      echo 'Równe<br>';
    else
      echo 'Różne<br>';

      if ($x === $y)
        echo 'Identyczne<br>';
      else
        echo 'Różne<br>';


        ##########################################################################
/*\ od wersji php 7
      $x = 1;
      $y = 1;
      $wynik = $x <=> $y;
      echo $wynik;
\*/

    $x = 2;
    echo $x++;  // 2
    echo ++$x;  // 4
    echo $x;  // 4
    $y = $x++;
    echo $y;  // 4
    $y = ++$x;
    echo $y;  // 6
    echo ++$y;  // 7
    ##########################################################################
//operatory rzutowania
//bool, int, float, string, array, object, date_sunset
    echo '<hr>';
    $text1 = '123ssd';

    $x1 = (int)$text1;
    echo $x1,'<br>';

    $x1 = (float)$x1;
    echo $x1,'<br>';
    echo gettype($x1),'<br>';

    $text2 = 123;
    $x2 = (boolean)$text2;
    echo $x2,'<br>'; // 1 - true

    $x3 = (unset)$text2;
    echo '<hr>',$x3;
    echo gettype($x3);

    //rozmiar typu integer

    echo PHP_INT_SIZE,'<hr>'; //4

    $w;
//@ to operator ignorowania błedów
    echo @$w;
    echo @gettype($w); //NULL

    $text = 'ZSŁ';
    $text1 = '123';
    echo is_string($text); //true
    echo is_bool($text); //false
    echo is_float($text); //false
    echo is_int($text1); //false
    echo is_null($text); //false

    ##########################################################################

    //zmienne superglobalne

    //$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

    echo $_SERVER['SERVER_PORT'];//80


 ?>
