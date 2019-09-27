<?php

    $text = <<< T
      zsl - Zespół
      Szkół
      Łączności
T;

    echo "Przed wywołaniem funckji nl2br:<br> $text";
    echo '<br><br>Po wywołaniu funckji nl2br:<br>';
    echo nl2br($text),'<br>';


    $text = 'jaNUsZ';
    //zamiana na małe litery
    echo strtolower($text); //janusz
    //zamiana na duze litery
    echo strtoupper($text); //JANUSZ
    //zamiana pierwszej litery na duza
    $text = 'rAZ DWA trzy';

    echo ucfirst($text),'<br>'; //RAZ DWA trzy

    //zamiana wszystkich pierwszych liter na duze

    echo ucwords($text),'<br>'; //RAZ DWA Trzy

    //
    $text = 'jaNuSz';
    $firstLetter = substr($text,0,1);
    echo $firstLetter;
    $lateLetter = substr($text,1);
    echo $lateLetter;

    ucfirst($text,0,1)


?>
