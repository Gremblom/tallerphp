<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        <label>Por favor ingrese un numero entero</label>
        <input type="number" name="numero">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $numero = $_POST["numero"];

    if ($numero % 2 == 0){
        if ($numero > 10){
            echo "{$numero} es par y mayor a 10";
        } else if ($numero < 10){
            echo "{$numero} es par y menor que 10";
        } else {
            echo "{$numero} es par e igual a 10";
        }
    } else if ($numero % 2 != 0){
        if ($numero > 10){
            echo "{$numero} es impar y mayor a 10";
        } else if ($numero < 10){
            echo "{$numero} es impar y menor que 10";
        } else {
            echo "{$numero} es impar e igual a 10";
        }
    }
?>