<!DOCTYPE html>
<!--
Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            echo "La multiplicacion de $a y $b es ", $a * $b;
        ?>
    </body>
</html>
