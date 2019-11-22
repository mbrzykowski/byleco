<?php

    //data
    echo date("Y"),"<br>";
    echo date("y"),"<br>";
    echo date("Y-m-d"),"<br>";
    echo date("Y-M-D"),"<br>";
    echo date("d-m-y"),"<br>";
    echo date("e"),"<br>";
    echo date("F"),"<br>";

    //czas
    echo date("g"),"<br>";
    echo date("G"),"<br>";
    echo date("h"),"<br>";
    echo date("H"),"<br>";
    echo date("i"),"<br>";
    echo date("I"),"<br>"; //czas letni/zimowy 1/0

    echo date("j"),"<br>";
    echo date("l"),"<br>";
    echo date("L"),"<br>"; //rok przestepny 0 - nie 1 - tak
    echo date("m"),"<br>"; //z zerem
    echo date("n"),"<br>"; //bez zera

    echo date("O"),"<br>";
    echo date("o"),"<br>";
    echo date("P"),"<br>";

    echo date("t"),"<br>";
    echo date("T"),"<br>"; //Central Europe Time
    echo date("U"),"<br>";

    echo date("s"),"<br>";
    echo date("S"),"<br>";

    echo date("w"),"<br>";
    echo date("W"),"<br>";
    echo date("z"),"<br>";

    //getdate()

    $data = getdate();

    echo "<pre>";
      echo print_r($data);
    echo "</pre>";

    $weekDay = $data['wday'];

    switch ($weekDay) {
      case 1:
        $weekDay = "Poniedziałek";
        break;
      case 5:
        $weekDay = "Piątek";
        break;

    }
    echo "$weekDay"."<br>";



//wyswietl na ekranie date i czas w formacie dzien: 22 Listopada 2019, Godzina: 19:46, Dzien tygodnia: Piątek
echo "<br>";



$month1 = $data['month'];


  if ($month1 == "November") {
    $month1 = " Listopada ";
  }

  echo $data['mday'];
  echo $month1;
  echo $data['year'],"<br>";

  echo $data['hours'];
  echo ":";
  echo $data['minutes'];
  echo "<br>";


  echo "$weekDay"."<br>";

  $day = $data['mday'];
  $year = $data['year'];
  $hour = $data['hours'];
  $min = $data['minutes'];

  echo "<br>";

  echo "$day $month1 $year $hour:$min $weekDay"


 ?>
