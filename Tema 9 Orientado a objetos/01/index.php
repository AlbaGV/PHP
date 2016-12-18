<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php

    include_once 'Pinguino.php';
    include_once 'Gato.php';
    include_once 'Perro.php';
    include_once 'Lagarto.php';

    $flurflis = new Gato("macho", "romano");
    $papaya = new Gato("macho");
    $cisnao = new Gato("hembra");
    $goku = new Perro();
    $kiba = new Perro("hembra", "Pastor aleman");

    echo $flurflis."<br>";
    echo $papaya."<br>";
    echo $cisnao."<br>";
    echo $kiba."<br>";
    echo $goku."<br><hr>";

    $pajaro = new Ave();
    echo $pajaro->grazna()."<br>";
    echo $pajaro->vuela()."<br><hr>";

    $pingu = new Pinguino("hembra");
    echo $pingu->grazna()."<br>";
    echo $pingu->vuela()."<br>";
    echo $pingu->come("pescadito")."<br>";
    echo $pingu->pesca()."<br><hr>";

    $chucho = new Perro("hembra", "chucho");
    echo $chucho->duerme()."<br>";
    echo $chucho->dameLaPata()."<br>";
    echo $chucho->grune()."<br>";
    echo $chucho->amamanta()."<br>";
    echo $chucho->cuidaCrias()."<br><hr>";

    $jango = new Lagarto("macho");
    echo $jango->tomaElSol()."<br>";
     echo $jango->mirada()."<br>";
    echo $jango->duerme()."<br><hr>";

  ?>
  </body>
</html>
