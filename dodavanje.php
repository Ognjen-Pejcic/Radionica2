<?php

require "dbBroker.php";
require "header.php";


echo "<pre>";
var_dump($_POST);
echo "</pre>";

$ime =$_POST['ime'];

$prezime =$POST['prezime'];

$smer =$_POST['smer'];

$query = $pdo->prepare("insert into student values (:id, :ime, :prezime, :smer)");
$query->bindValue(':id', null);
$query->bindValue(':ime', $ime);
$query->bindValue(':prezime', $prezime);
$query->bindValue(':smer', $smer);
$query->execute();
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
    
<form>
  <div class="form-group" action="obrada.php" method="POST">
    <input type="text" class="form-control"  name="ime" placeholder="Ime">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="prezime" placeholder="Prezime">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="smer" placeholder="Smer">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>