<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio6.php" method="post">
        <label>Nombre del estudiante 1</label>
        <input type="text" name="nombre1">
        <br>

        <label>Genero del estudiante</label>
        <select name="genero1">
            <option value="hombre">H</option>
            <option value="mujer">M</option>
        </select>
        <br>

        <label>Nota definitiva</label>
        <input type="number" step="0.01" name="definitiva1">
        <br><br>

        <label>Nombre del estudiante 2</label>
        <input type="text" name="nombre2">
        <br>

        <label>Genero del estudiante</label>
        <select name="genero2">
            <option value="hombre">H</option>
            <option value="mujer">M</option>
        </select>
        <br>

        <label>Nota definitiva</label>
        <input type="number" step="0.01" name="definitiva2">
        <br><br>

        <label>Nombre del estudiante 3</label>
        <input type="text" name="nombre3">
        <br>

        <label>Genero del estudiante</label>
        <select name="genero3">
            <option value="hombre">H</option>
            <option value="mujer">M</option>
        </select>
        <br>

        <label>Nota definitiva</label>
        <input type="number" step="0.01" name="definitiva3">
        <br><br>

        <label>Nombre del estudiante 4</label>
        <input type="text" name="nombre4">
        <br>

        <label>Genero del estudiante</label>
        <select name="genero4">
            <option value="hombre">H</option>
            <option value="mujer">M</option>
        </select>
        <br>

        <label>Nota definitiva</label>
        <input type="number" step="0.01" name="definitiva4">
        <br><br>

        <input type="submit">
        <br><br>
    </form>
</body>
</html>

<?php
    $definitiva_1 = $_POST["definitiva1"];
    $definitiva_2 = $_POST["definitiva2"];
    $definitiva_3 = $_POST["definitiva3"];
    $definitiva_4 = $_POST["definitiva4"];

    if ($definitiva_1 > $definitiva_2){
        if ($definitiva_1 > $definitiva_3){
            if ($definitiva_1 > $definitiva_4){
                echo "{$_POST["nombre1"]} es el/la estudiante con mayor nota con un promedio de {$definitiva_1}<br>";
            } else if ($definitiva_1 == $definitiva_4){
                echo "{$_POST["nombre1"]} y {$_POST["nombre4"]} son los estudiantes con mayor nota con un promedio de {$definitiva_1}<br>";
            } 
        } else if ($definitiva_1 == $definitiva_3){
            echo "{$_POST["nombre1"]} y {$_POST["nombre3"]} son los estudiantes con mayor nota con un promedio de {$definitiva_1}<br>";
        }
    } else if ($definitiva_2 > $definitiva_3){
        if ($definitiva_2 > $definitiva_4){
            echo "{$_POST["nombre2"]} es el/la estudiante con mayor nota con un promedio de {$definitiva_2}<br>";
        } else if ($definitiva_2 == $definitiva_4){
            echo "{$_POST["nombre2"]} y {$_POST["nombre4"]} son los estudiantes con mayor nota con un promedio de {$definitiva_2}<br>";   
        }
    } else if ($definitiva_3 > $definitiva_4){
        echo "{$_POST["nombre3"]} es el/la estudiante con mayor nota con un promedio de {$definitiva_3}<br>";
    } else if ($definitiva_3 == $definitiva_4){
        echo "{$_POST["nombre3"]} y {$_POST["nombre4"]} son los estudiantes con mayor nota con un promedio de {$definitiva_3}<br>";
    } else {
        echo "{$_POST["nombre4"]} es el/la estudiante con mayor nota con un promedio de {$definitiva_4}<br>";
    }

    if ($definitiva_1 < $definitiva_2){
        if ($definitiva_1 < $definitiva_3){
            if ($definitiva_1 < $definitiva_4){
                echo "{$_POST["nombre1"]} es el/la estudiante con menor nota con un promedio de {$definitiva_1}<br>";
            } else if ($definitiva_1 == $definitiva_4){
                echo "{$_POST["nombre1"]} y {$_POST["nombre4"]} son los estudiantes con menor nota con un promedio de {$definitiva_1}<br>";
            } 
        } else if ($definitiva_1 == $definitiva_3){
            echo "{$_POST["nombre1"]} y {$_POST["nombre3"]} son los estudiantes con menor nota con un promedio de {$definitiva_1}<br>";
        }
    } else if ($definitiva_2 > $definitiva_3){
        if ($definitiva_2 > $definitiva_4){
            echo "{$_POST["nombre2"]} es el/la estudiante con menor nota con un promedio de {$definitiva_2}<br>";
        } else if ($definitiva_2 == $definitiva_4){
            echo "{$_POST["nombre2"]} y {$_POST["nombre4"]} son los estudiantes con menor nota con un promedio de {$definitiva_2}<br>";   
        }
    } else if ($definitiva_3 > $definitiva_4){
        echo "{$_POST["nombre3"]} es el/la estudiante con menor nota con un promedio de {$definitiva_3}<br>";
    } else if ($definitiva_3 == $definitiva_4){
        echo "{$_POST["nombre3"]} y {$_POST["nombre4"]} son los estudiantes con menor nota con un promedio de {$definitiva_3}<br>";
    } else {
        echo "{$_POST["nombre4"]} es el/la estudiante con menor nota con un promedio de {$definitiva_4}<br>";
    }
?>