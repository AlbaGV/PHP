
<?php
  // Crea la clase DadoPoker . Las caras de un dado de poker tienen las siguientes figuras: As, K, Q, J,
  // 7 y 8 . Crea el método tira() que no hace otra cosa que tirar el dado, es decir, genera un valor
//aleatorio para el objeto al que se le aplica el método. Crea también el método nombreFigura() , que
//diga cuál es la figura que ha salido en la última tirada del dado en cuestión. Crea, por último, el
//método getTiradasTotales() que debe mostrar el número total de tiradas entre todos los dados.
//Realiza una aplicación que permita tirar un cubilete con cinco dados de poker.
  session_start();

  include_once 'DadoPoker.php';


  if (!isset($_SESSION[tirado])) {
    $_SESSION[tirado] = serialize(array(new DadoPoker(), new DadoPoker(), new DadoPoker(), new DadoPoker(), new DadoPoker()));
  }

  if (!isset($_SESSION[tiradasTotales])) {
    $_SESSION[tiradasTotales] = 0;
  }
  

  $tirado = unserialize($_SESSION[tirado]);
  DadoPoker::setTiradasTotales($_SESSION[tiradasTotales]);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Dados de Poker</title>
  </head>
  <body>
    <?php
      echo "Dados: ";

      foreach ($tirado as $dado) {
        $dado->tira();
        echo ($dado->nombreFigura())." ";
      }

      echo "<br>Tiradas de dados totales: ".(DadoPoker::getTiradasTotales());
      echo "<br>Tiradas de cubilete: ".(DadoPoker::getTiradasTotales() / 5);

 
      $_SESSION[tirado] = serialize($tirado);
      $_SESSION[tiradasTotales] = DadoPoker::getTiradasTotales();
    ?>

  </body>
</html>
