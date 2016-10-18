<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h2>Ese dia toca:</h2><br>
        <?php
            $dia = $_GET['dia'];
            switch($dia) {
                case "lunes": // Bloque 1
                    echo "Empresa";
                break;
                case "martes": // Bloque 2
                    echo "Interfaces";
                break;
                case "miercoles": // Bloque 2
                    echo "Clientes";
                break;
                case "jueves": // Bloque 2
                    echo "Php";
                break;
                case "viernes": // Bloque 2
                    echo "Interfaces";
                break;
                default: // Bloque 3
                    echo "No es un dia de clase";
            }
        ?>
    </body>
</html>

