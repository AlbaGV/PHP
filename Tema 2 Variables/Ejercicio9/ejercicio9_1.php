<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <?php
            $h = $_GET['h'];
            $r = $_GET['r'];
            $pi = M_PI;
           
            echo "El volumen del cono es: ",($pi * $h * pow($r, 2))/3 ,"<br>";
        ?>
    </body>
</html>