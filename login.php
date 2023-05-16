<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>El usuario es: Vermen</p>
    <br>
    <p>La contraseña es: 1234</p>
    <br><br>

    <form action="login.php" method="post">
        <label>Usuario</label>
        <input type="text" name="usuario">
        <br>

        <label>Contraseña</label>
        <input type="password" name="contraseña">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    if ("Vermen" == $usuario && "1234" == $contraseña){
        header('Location: ejercicio1.php');
    } else {
        echo "La contraseña o el usuario son incorrectos";
    }
?>