<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php
            $dia = $_GET['dia'];
            $mes = $_GET['mes'];
                switch($mes) {
                    case "enero":
                        if($dia<19){
                            echo "Eres sagitario";
                        }else{
                            echo "Eres capricornio";
                        }
                    case "febrero":
                        if($dia<16){
                            echo "Eres capricornio";
                        }else{
                            echo "Eres acuario";
                        }
                    case "marzo":
                        if($dia<12){
                            echo "Eres aquario";
                        }else{
                            echo "Eres picis";
                        }
                    case "abril":
                        if($dia<19){
                            echo "Eres piscis";
                        }else{
                            echo "Eres aries";
                        }
                    case "mayo":
                        if($dia<14){
                            echo "Eres aries";
                        }else{
                            echo "Eres tauro";
                        }
                    case "junio":
                        if($dia<21){
                            echo "Eres tauro";
                        }else{
                            echo "Eres geminis";
                        }
                    case "julio":
                        if($dia<21){
                            echo "Eres geminis";
                        }else{
                            echo "Eres cancer";
                        }
                    case "agosto":
                        if($dia<11){
                            echo "Eres cancer";
                        }else{
                            echo "Eres leo";
                        }
                    case "septiembre":
                        if($dia<16){
                            echo "Eres leo";
                        }else{
                            echo "Eres virgo";
                        }
                    case "obtubre":
                        if($dia<31){
                            echo "Eres virgo";
                        }else{
                            echo "Eres libra";
                        }
                    case "noviembre":
                        if($dia<23){
                            echo "Eres libra";
                        }else if($dia>=23 && $dia<29){
                            echo "Eres escorpio";
                        }else{
                            echo "Eres ofiuco";
                        }
                    case "diciembre":
                        if($dia<18){
                            echo "Eres ofiuco";
                        }else{
                            echo "Eres sagitario";
                        }
                    
                        
                    

                    default:
                        echo "Ese mes no existe";
                }
   
        ?>
    </body>
</html>