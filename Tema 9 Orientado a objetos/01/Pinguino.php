<?php

include_once 'Ave.php';

class Pinguino extends Ave {

  public function __construct($s) {
    parent::__construct($s);
  }

  public function aseate() {
    return parent::aseate().", a los pingüinos nos gusta asearnos";
  }
  
  public function vuela() {
    return "No le pidas naranjas a un olmo";
  }
  
  public function nada() {
    return "Glop Glop";
  }
  
  public function pesca() {
    return "Uff este ha sido bien grande";
  }
}