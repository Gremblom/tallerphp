<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio3.php" method="post">
        <label>Resistencia del circuito en amperios</label>
        <input type="number" step="0.01" name="resistencia">
        <br><br>

        <label>Intensidad de la corriente en ohmios</label>
        <input type="number" step="0.01" name="intensidad">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $resistencia = $_POST["resistencia"];
    $intensidad = $_POST["intensidad"];

    $voltaje = $resistencia * $intensidad;

    echo "El voltaje del circuito es de {$voltaje} V";
?>