<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h2>Ese dia es:</h2><br>
        <?php
            $dia = $_GET['dia'];
            switch($dia) {
                case 1: // Bloque 1
                    echo "Lunes";
                break;
                case 2: // Bloque 2
                    echo "Martes";
                break;
                case 3: // Bloque 2
                    echo "Miercoles";
                break;
                case 4: // Bloque 2
                    echo "Jueves";
                break;
                case 5: // Bloque 2
                    echo "Viernes";
                break;
                case 6: // Bloque 2
                    echo "Sabado";
                break;
                case 7: // Bloque 2
                    echo "Domingo";
                break;
                default: // Bloque 3
                    echo "No hay suficientes dia de la semana";
            }
        ?>
    </body>
</html>
