<?php

include "header.php";
require "dbBroker.php";


$query = $pdo->prepare("select * from student");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// var_dump($result);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<a href="dodavanje.php" type="button" class="btn btn-success">Dodaj studenta</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="row">id</th>
                <th scope="row">Ime</th>
                <th scope="row">Prezime</th>
                <th scope="row">Smer</th>
            </tr>
        </thead>
        <tbody>
           
            <?php foreach ($result as $i => $student) { ?>
                <tr>
                <th scope="row"><?php echo $i + 1 ?></th>
                <td><?php echo $student["Ime"] ?></td>
                <td><?php echo $student["Prezime"] ?></td>
                <td><?php echo $student["SmerID"] ?></td>
                </tr>
                <?php
                  
            }
            ?>
          
        </tbody>
    </table>


</body>

</html>