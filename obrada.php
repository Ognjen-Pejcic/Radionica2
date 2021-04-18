<?php
require 'dbBroker.php';


$ime =$_GET['ime'];

$prezime =$_GET['prezime'];

$smer =$_GET['smer'];

$query = $pdo->prepare("insert into student values (:id, :ime, :prezime, :smer)");
$query->bindValue(':id', null);
$query->bindValue(':ime', $ime);
$query->bindValue(':prezime', $prezime);
$query->bindValue(':smer', $smer);
$query->execute();

header('Location: uspesno.php');
?>