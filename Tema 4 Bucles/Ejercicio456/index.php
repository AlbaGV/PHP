<!DOCTYPE html>
<!--
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4,5 y 6</title>
    </head>
    <body>
        <?php
            for($i=320;$i>160;){
               echo $i-=20," ";
            }
            while($x>160){
                $x = 320;
                echo $x-=20," ";
            }
            do{
                $y = 320;
                echo $y-=20," ";
            }while($y>160)
        ?>
    </body>
</html>


