<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $calkowita = 10;
    $hex = 0xA;
    $oct = 021;
    $bin = 0b1011;

    echo $bin;


    $x = 3.0;

    $name = 'Janusz';
    echo  "Masz na imię $name<hr>";

    //składnia heredoc
    //php version 5.6.14

    $surname = 'Kowalki';

    $text = <<< ETYKIETA
    Masz na imię: $name<br>
    Nazwisko: $surname<hr>
ETYKIETA;

    echo $text;


//składnia nowdoc

    $text = <<< 'E'
    Masz na imię: $name<br>
    Nazwisko: $surname<hr>
E;

    $text='Poznań';


    echo "Zmienna o nazwie \$text ma wartość: $text<br>";
    echo 'Zmienna o nazwie $text ma wartość:', $text;


     ?>


  </body>
</html>
