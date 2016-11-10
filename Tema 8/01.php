<h3 class="text-center">Mantemiento de clientes</h3>
<?php
          
  $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
 

  if($_POST['accion'] == "Nuevo cliente") {
    $inserta = "INSERT INTO cliente VALUES (\"$_POST[dni]\", \"$_POST[nombre]\", \"$_POST[direccion]\", \"$_POST[telefono]\")";
    $conexion->exec($inserta);
  }

  if($_POST['accion'] == "Modificar") {
    $modifica = "UPDATE cliente SET  nombre=\"$_POST[nombre]\", direccion=\"$_POST[direccion]\", telefono=\"$_POST[telefono]\" WHERE dni=\"$_POST[dni]\"";
    $conexion->exec($modifica);
  }

  if($_POST['accion'] == "Eliminar") {
    $borra = "DELETE FROM cliente WHERE dni=\"$_POST[dni]\"";
    $conexion->exec($borra);
  }
          
  // Listado /////////////////////////////////////////////////
  $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente");
  ?>
  
  <table  class="table table-striped">
    <tr>
      <th>DNI</th>
      <th>Nombre</th>
      <th>Dirección</th>
      <th>Teléfono</th>
      <th></th>
      <th></th>
    </tr>
    
  <?php

    while ($cliente = $consulta->fetchObject()) {
      ?>
      <tr>
      <td><?=$cliente->dni?></td>
      <td><?=$cliente->nombre?></td>
      <td><?=$cliente->direccion?></td>
      <td><?=$cliente->telefono?></td>
      <td>
        <form action="pagina.php" method="post">
          <input type="hidden" name="ejercicio" value="01">
          <input type="hidden" name="dni" value="<?=$cliente->dni?>">
          <input type="hidden" name="accion" value="Eliminar">
          <button type="submit" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span> Eliminar
          </button>
        </form>
      </td>
      <td>
        <form action="pagina.php" method="post">
          <input type="hidden" name="ejercicio" value="01_modificar_cliente">
          <input type="hidden" name="dni" value="<?=$cliente->dni?>">  
          <input type="hidden" name="nombre" value="<?=$cliente->nombre?>">
          <input type="hidden" name="direccion" value="<?=$cliente->direccion?>">
          <input type="hidden" name="telefono" value="<?=$cliente->telefono?>">
          <button type="submit" class="btn btn-warning">
          <span class="glyphicon glyphicon-pencil"></span> Modificar
          </button>
        </form>
      </td>            
      </tr>
      <?php
    }
    ?>
        
    <!-- Añadir un nuevo cliente /////////////////////////////////-->
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="01">
      <input type="hidden" name="accion" value="Nuevo cliente">
    <tr>
      <td><input type="text" name="dni" size="10"></td>
      <td><input type="text" name="nombre"></td>
      <td><input type="text" name="direccion"></td>
      <td><input type="text" name="telefono"  size="12"></td>
      <td colspan="2">
        <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-ok"></span> Nuevo cliente
        </button>
      </td>

    </tr>
    </form>
  </table>
