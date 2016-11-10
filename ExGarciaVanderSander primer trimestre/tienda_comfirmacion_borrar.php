<h3>Confirmacion borrar</h3><hr>
<?php
  $codigo = $_POST['codigo'];
  $producto = $_SESSION['producto'];
  $elemento = $producto[$codigo];
  ?>
  <img src="img/<?= $elemento[imagen] ?>" width="360" border="1"><br>
  <?= $elemento[nombre] ?><br>Precio: <?= $elemento[precio] ?> €
  Unidades de este producto en el carrito: <?= $_SESSION[carrito][$codigo] ?>;<br>
  <b>¿Seguro que quiere borrar este producto?</b>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="tienda">
    <input type="hidden" name="codigo" value="<?= $codigo ?>">
    <input type="hidden" name="accion" value="eliminar">
    <input type="submit" value="SI">
  </form>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="tienda">
    <input type="submit" value="NO">
  </form>
  <br><br>