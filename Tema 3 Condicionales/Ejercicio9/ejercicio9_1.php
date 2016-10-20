<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <h2>La solucion de [ax² + bx + c = 0] es:</h2><br>
        <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            $dentro = (pow($b, 2)-4*$a*$c);
            
            if($a==0){
                echo "La solucion es: ",-$c/$b;
            }else if($b==0){
                if(($c<0 && $a>0)||($c>0 && $a<0)){
                    echo "La soluciones son: ",  pow(-$c/$a, 1/2)," y ",-pow(-$c/$a, 1/2);
                }else{
                    echo "No hay solucion";
                }
            }else if($c==0){
                echo "La soluciones son 0 y ",-$b/$a;
            }else{
                if($dentro<0){
                    echo "No hay solucion";
                }else{
                    echo "Las soluciones son: ", (-$b + pow($dentro, 1/2))/(2*$a)," y ",(-$b - pow($dentro, 1/2))/(2*$a);
                }
                
            }
        ?>
    </body>
</html>