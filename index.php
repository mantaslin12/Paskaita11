<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION['participants'])){
        $_SESSION['participants'] = [];
    }
   
    if(isset($_GET["name"])  && isset($_GET["surname"]) && isset($_GET["age"]) && isset($_GET["hobby"]) && $_GET["name"] !=="" && $_GET["surname"] != "" && $_GET["age"] !== "" && $_GET["hobby"] !==""){
       $_SESSION['participants'][] = ['name' => $_GET['name'], 'surname' => $_GET['surname'], 'age' => $_GET['age'], 'hobby' => $_GET['hobby']];
    }

    ?>

<form action="" method="get">
        <input type="text" name="name"> Vardas
        <input type="text" name="surname"> Pavardė
        <input type="text" name="age"> Amžius
        <input type="text" name="hobby"> Hobis
        <button type="submit" class="btn btn-success">Registruotis</button>
    </form>
<table class="table table-dark table-striped">
<thead>
        <tr>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Age</th>
        <th scope="col">Hobby</th>
        </tr>
    </thead>
    <tbody>
    <?php
            foreach ($_SESSION['participants'] as $ptc) {// php foreach paleidžiame ir uždarome php tagą. žemiau esantis html įvyks tiek kartų kiek kartų ciklas prasisuks
            ?>
                <tr>
                    <td> <?=$ptc['name']?> </td>  <!-- taip atvaizduojame kintamuosius -->
                    <td> <?=$ptc['surname']?> </td>
                    <td> <?=$ptc['age']?> </td>
                    <td> <?=$ptc['hobby']?> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>