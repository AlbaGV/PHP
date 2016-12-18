<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vehículos</title>
    </head>
    <body>
	<?php
	
            include_once 'Bicicleta.php';
            include_once 'Coche.php';

            $bike = new Bicicleta("6");
			 

            $car = new Coche(2600);
			 
            $bike->recorre(15);
            $car->recorre(30);
            echo $bike->hazCaballito()."<br>";
            echo $bike->vuelta()."<br>";
            echo $car->quemaRueda()."<br>";
            echo $car->policia()."<br>";
            $bike->recorre(20);
            echo "La bici ha recorrido: ".$bike->getKmRecorridos()." Km<br>";
            echo "El coche ha recorrido: ".$car->getKmRecorridos()." Km<br>";
            echo "Total del vehiculos: ".Vehiculo::getVehiculosCreados()."<br>";
            echo "Km totales: ".Vehiculo::getKmTotales()."<br>";
		?>
    </body>
</html>
