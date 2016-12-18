<?php

include_once 'Animal.php';

class Lagarto extends Animal {
  
  public function tomaElSol() {
    return "Estoy tomando el Sol";
  }
  
  public function baniate() {
    return "Me estoy dando un chapuzón";
  }
  
  public function mirada() {
    return "Te miro fijamente";
  }
}
