<?php
  class connexion {
    private $host;
    private $dbname;
    private $login;
    private $psw;
    private  $bdd;

    public function connexion() {
      // constructeur 
      $this->host     = '192.168.3.125';
      $this->dbname   = 'testtranspo';
      $this->login    = 'root';
      $this->psw      = 'sqlcoda#2018!';
    }
    
    public function connect() {
      
      try { $this->bdd = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->login, $this->psw);
         
    } catch (Exception $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }
      
    }
    public function para ($para1 = "",$para2 ="") {
      $reponse = $this->bdd->query("SELECT $para1 FROM $para2");
      $donnees = $reponse->fetchAll();
      foreach ($donnees as $valeur) {
        echo "<span>".$valeur[$para1]."</span>"." ";
    };
    $reponse->closeCursor(); // Termine le traitement de la requête
     
    }
  }
?>