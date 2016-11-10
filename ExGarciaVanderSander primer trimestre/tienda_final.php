<h3>Factura</h3><hr>
<?php
  $codigo = $_POST['codigo'];
  $producto = $_SESSION['producto'];
  $elemento = $producto[$codigo];
  $envio = $_POST['envio'];
  
  // Inicializa finalizar compra por primera vez
  if (!isset($_SESSION[carrito])) {
    $_SESSION[carrito] = array ("peli1000" => 0, "parkduo" => 0, "viscvan" => 0, "waterexp" => 0);
  }

  

  // Muestra el contenido
  $total = 0;
  foreach ($producto as $cod => $elemento) {
    if ($_SESSION[carrito][$cod] > 0) {
      $total = $total + ($_SESSION[carrito][$cod] * $elemento[precio]);
      ?>
      <img src="img/<?=$elemento[imagen]?>" width="200" border="1"><br>
      <?=$elemento[nombre]?><br>Precio: <?=$elemento[precio]?> €<br>
      Unidades: <?=$_SESSION[carrito][$cod]?>
      <br><br>
      <?php
    }
  }



    if($total < 60){
        switch ($envio) {
            case "españa":
                echo "Son 9€ de envio el total es: ",$total+9;

                break;
            case "europa":
                echo "Son 14€ de envio el total es: ",$total+14;

                break;
            case "mundo":
                echo "Son 21€ de envio el total es: ",$total+21;

                break;
            default:
                echo "No has elegido bien el destino";
                break;
        }    
    }else if ($total>=60 && $total< 200) {
        echo "El envio es gratis el total es: ",$total;
    }else if ($total >= 200){
        echo "Tienes un 5% de descuento total es: ",$total*0.95;
    }
  ?>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="tienda">
    <input type="submit" value="Volver a la tienda">
  </form>
  <br><br>