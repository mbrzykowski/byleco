<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <table>


<div id="form">
<form method="post">
Wpisz liczbe : <input type="number" name="ile">

<input type="submit" name="Zatwierdz" value="Zatwierdz!">

</form>
</div>
    <?php
if (!empty($_POST['ile']))
{
    $suma = 0;
    $ile = $_POST['ile'];
    if (!empty($ile)) {

      $row = 1;

      do
      {
          echo "<tr>";
          $col = 1;
          do{
            $fin=$col*$row;
            if ($row==$col)
            {
                echo"<td class=\"red\">$fin</td>";
            }
            else if($row+$col==$ile+1){
                 echo "<td class=\"yellow\">$fin</td>";
            } else{
              $suma+=$fin;
           echo "<td>$fin</td>";}
          
            $col++;
            }
            while ($col <= $ile);
                $row++;
                echo "</tr>";
      }
      while ($row<=$ile);
}

}     ?>

  </table>

  </body>
</html>
