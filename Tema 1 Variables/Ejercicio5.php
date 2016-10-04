<!DOCTYPE html>
<!--
Escribe un programa que utilice las variables $x y $y . Asignales los valores 144 y 999 respectiva-
mente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
y la multiplicación.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $x=144;
        $y=999;
        ?>
        <ul>
            <li><?php
            echo "Numeros: ";
            echo $x;
            echo " y ";
            echo $y;        
            ?></li>
            <li><?php
            echo "Suma: ";
            echo ($x+$y);
            ?></li>
            <li><?php
            echo "Resta: ";
            echo ($x-$y);
            ?></li>
            <li><?php
            echo "Multiplicacion: ";
            echo ($x*$y);
            ?></li>
            <li><?php
            echo "Division : ";
            echo ($x/$y);
            ?></li>
            
        </ul>   
    </body>
</html>



