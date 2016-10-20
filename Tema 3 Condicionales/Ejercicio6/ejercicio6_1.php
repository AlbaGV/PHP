<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
            $h = $_GET['h'];
            $dentro = ($h*2)/9.81;
            if($dentro<0){
                echo "No es posible hacerlo";
            }else{
                echo "Tarda: ",  pow($dentro, 1/2)," segundos";
            }
        ?>
    </body>
</html>