<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
            $hora = $_GET['hora'];
            if($hora>40){
                echo "Cobras: ",5*((12*40)+16*($hora-40)) ," euros";
            }else{
                echo "Cobras: ",5*12*$hora," euros";
            }
        ?>
    </body>
</html>

