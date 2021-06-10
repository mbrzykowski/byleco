<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}

    if($_SESSION['per_add_order'] == 0 ){
        header('Location: main_admin.php');
    }
    
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main">

<div class="top">
<?php
echo $_SESSION['name']." ".$_SESSION['surname'];
?>
<form action="main_admin.php">
<input type="submit" value="Cofnij">
</form>
<form action=logout.php>
<input type="submit" value="Wyloguj się">
</form>
</div>

<div class="middle">

<form method="post" action="insert_order.php">

<input type="text" placeholder="Nazwa elementu"  name="element_name" /><br />

<input type="number" placeholder="Ilość"  name="number" /><br />
<select name="client_id">
<?php
require_once "config.php";


$wynik = @$polaczenie-> query("SELECT * FROM `clients`")
or die('Błąd zapytania');


while ($row = mysqli_fetch_array($wynik)) {
    echo "<option value='" . $row['client_id'] . "'>" . $row['company_name'] . "</option>";
}
?>
</select><br>
<input type="date" placeholder="Termin"  name="deadline" /><br />

<input type="text" placeholder="Farba" name="colour" /><br />


<input type="submit" value="Dodaj zlecenie" />

</form>

</div>

<div class="footer">

<?php

    echo date("d.m.y | H.m.s");

?>

</div>

</div>
</body>
</html>