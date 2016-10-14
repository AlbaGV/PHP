<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            echo "La suma es: ", $a + $b,"<br>";
            echo "La resta es: ", $a - $b,"<br>"; 
            echo "La multiplicacion es: ", $a * $b,"<br>"; 
            echo "La division es: ", $a / $b,"<br>";
        ?>
    </body>
</html>