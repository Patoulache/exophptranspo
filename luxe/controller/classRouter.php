<?php

class router {

  private $tab = array("vueAccueil","blog","services","contact","hotel");

  public function __construct() {
   
    if (in_array($_GET["vueA"], $this->tab)) {
      
      require_once ('vue/'.$_GET["vueA"].".php");
    
    } else {
      require_once ('vue/vueAccueil.php');
    }

  }


}

?>