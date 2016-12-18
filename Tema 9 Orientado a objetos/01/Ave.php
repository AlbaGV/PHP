<?php

include_once 'Animal.php';

class Ave extends Animal {
  
  public function __construct($s) {
    parent::__construct($s);
  }
  
  public function grazna() {
    return "KRUUUAAAAAA";
  }
  
  public function vuela() {
    return "Estoy volando";
  }
  
  public function ponHuevo() {
    if ($this->getSexo() == "macho") {
      return "Soy macho, no puedo poner huevos";
    } else {
      return "Ahí va eso... un huevo";
    }
  }
}