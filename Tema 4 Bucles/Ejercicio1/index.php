<!DOCTYPE html>
<!--
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            for($i=1;$i<=100;$i++){
               if($i%5==0){
                   echo $i ," ";
               }
            }
        ?>
    </body>
</html>
