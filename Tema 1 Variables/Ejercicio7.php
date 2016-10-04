<!DOCTYPE html>
<!--
Crea las variables $nombre , $direccion y $telefono y asígnales los valores adecuados. Muestra los
valores por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 2.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nombre="Alba Garcia Van der Sander";
        $direccion="Arroyo comendador";
        $telefono="697979084";
        ?>
        <ul>
            <li><?php
            echo "$nombre"
            ?></li>
            <li><?php
            echo $direccion
            ?></li>
            <li><?php
            echo $telefono
            ?></li>
        </ul>   
    </body>
</html>



