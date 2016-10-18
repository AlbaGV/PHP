<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $hora = $_GET['hora'];
            switch($hora) {
                case (($hora>=6) && ($hora<=12)): // Bloque 1
                    echo "Buenos dias!!";
                break;
                case (($hora>=13) && ($hora<=20)): // Bloque 2
                    echo "Buenas tardes!!";
                break;
                case (($hora>=21) && ($hora<=24)): // Bloque 2
                    echo "Buenas noches!!";
                break;
                case (($hora>=1) && ($hora<=5)): // Bloque 2
                    echo "Buenas noches!!";
                break;
                default: // Bloque 3
                    echo "No es hora de saludar";
            }
        ?>
    </body>
</html>

