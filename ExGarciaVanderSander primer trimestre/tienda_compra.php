<h3>Finalizar compra</h3><hr>
<?php // Compra ///////////////////////////////////////////////////////
  $codigo = $_POST['codigo'];
  $producto = $_SESSION['producto'];
  $elemento = $producto[$codigo];
  
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
  ?>
  <b>Total: <?=$total?> €</b>
  <b>Envio:</b>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="tienda_final">

    <select name="envio">
        <option value="españa">España</option>
        <option value="europa">Europa</option>
        <option value="mundo">Mundo</option>
    </select>
    <input type="submit" value="Envio">
  </form>

  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="tienda">
    <input type="submit" value="Volver a la tienda">
  </form>
  <br><br>
