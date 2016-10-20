<!DOCTYPE html>
<!--
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            while($i<=100){
                $i++;
                if($i%5==0){
                    echo $i," ";
                }
            }
        ?>
    </body>
</html>

