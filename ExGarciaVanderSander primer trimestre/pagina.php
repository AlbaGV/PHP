<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="css/default.css" rel="stylesheet" type="text/css" />
    <title>Soluciones a los ejercicios</title>
  </head>
  <body>
    <div id="container">
      

      <div id="content">
    
        <?php
          include $_REQUEST['ejercicio'].'.php';
        ?>
        
        <br><br>
        <a href="index.php">>> Volver</a>
      </div>
      
    </div>
  </body>
</html>