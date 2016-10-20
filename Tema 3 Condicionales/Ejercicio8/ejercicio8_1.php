<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <?php
            $nota1 = $_GET['nota1'];
            $nota2 = $_GET['nota2'];
            $nota3 = $_GET['nota3'];
            
            if(($nota1<0 || $nota2<0 || $nota3<0)){
                echo "No es posible hacerlo";
            }else{
                $notafinal = ($nota1+$nota2+$nota3)/3;
                echo "La nota media es: ",  ($notafinal),"<br>";
                echo "Lo que correspode a: <br>";
                switch ($notafinal) {
                    case ($notafinal>=0 && $notafinal<5):
                        echo "Insuficiente";

                        break;
                    case ($notafinal>=5 && $notafinal<6):
                        echo "Suficiente";

                        break;
                    case ($notafinal>=6 && $notafinal<7):
                        echo "Bien";

                        break;
                    case ($notafinal>=7 && $notafinal<9):
                        echo "Notable";

                        break;
                    case ($notafinal>=9):
                        echo "Sobresaliente";

                        break;

                    default:
                        
                }
            }
        ?>
    </body>
</html>