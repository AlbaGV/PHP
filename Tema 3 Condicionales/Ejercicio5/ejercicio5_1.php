<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h2>La solucion de [ax + b = 0] es:</h2><br>
        <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            switch($a && $b) {
                case ($a==0 || $b==0):
                    echo "x = 0";
                break;
                case ($a!=0 && $b==0): 
                    echo "x = 0";
                break;
                case ($a!=0 && $b!=0): // Bloque 2
                    echo "x =",-$b/$a;
                break;
                
                default: // Bloque 3
            }
        ?>
    </body>
</html>