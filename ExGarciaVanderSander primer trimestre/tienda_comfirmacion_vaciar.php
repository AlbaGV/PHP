<h3>Confirmacion vaciar</h3><hr>
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
  <b>¿Seguro que quiere vaciar el carrito?</b>
        <form action="pagina.php" method="post">
          <input type="hidden" name="ejercicio" value="tienda">
          <input type="hidden" name="codigo" value="<?= $codigo ?>">
          <input type="hidden" name="accion" value="vaciar">
          <input type="submit" value="SI">
        </form>    
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="tienda">
    <input type="submit" value="NO">
  </form>
  <br><br>