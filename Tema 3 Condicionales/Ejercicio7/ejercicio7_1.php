<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php
            $nota1 = $_GET['nota1'];
            $nota2 = $_GET['nota2'];
            $nota3 = $_GET['nota3'];
            
            if($nota1<0 || $nota2<0 || $nota3<0){
                echo "No es posible hacerlo";
            }else{
                echo "La nota media es: ",  ($nota1+$nota2+$nota3)/3;
            }
        ?>
    </body>
</html>