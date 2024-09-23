<?php
require_once "chien.php";

class Maitre2 extends Chien{

  public $nom;
  public $metier;
  public $pays;

  /*******************************************************
  Initialise les propriétés du maitre lors de l'instanciation de l'objet
    Entrée : 
      $n [string] : Nom du maitre
      $m [string] : Métier du maitre
      $p [string] : Pays du maitre
      $nc [string] (optionnel) : Nom du chien du maitre
      $r [string] (optionnel) : Race du chien du maitre

    Sortie :
      $this->nom [string] : Nom du maitre dans l'objet instancié
      $this->metier [string] : Metier du maitre dans l'objet instancié
      $this->pays [string] : Pays du maitre dans l'objet instancié
      $this->nomChien [string] : Nom du chien du maitre dans l'objet instancié
      $this->race [string] : Race du chien du maitre dans l'objet instancié
    
    Retour :

  *******************************************************/
  public function __construct($n, $m, $p, $nc=null, $r=null) {
    $this->nom = $n;
    $this->metier = $m;
    $this->pays = $p;
    $this->nomChien = $nc;
    $this->race = $r;
  }

  /*******************************************************
  Retourne les détails du maitre 
    Entrée : 
      
    Sortie :
      
    Retour :
      [string] : Description du maitre
  *******************************************************/
  public function details() {
    $message = '<p><div><b>'.$this->nom.'</b>, <b>'.$this->metier.'</b> en <b>'.$this->pays.'</b>, ';
    if($this->nomChien) {
      $message .= 'est le maître d\'un chien :</div>';
      $message .= $this->description()."</p>";
    }
    else
      $message .= 'ne possède pas de chien.</div></p>';

    return $message;
  }

  /*******************************************************
  Affecte le nom et la race du chien 
    Entrée : 
      $nc [string] : Nom du chien du maitre
      $r [string] : Race du chien du maitre

    Sortie :
      
    Retour :
      $this->nomChien [string] : Nom du chien du maitre dans l'objet instancié
      $this->race [string] : Race du chien du maitre dans l'objet instancié
  *******************************************************/
  public function affecter($nc, $r) {
    $this->nomChien = $nc;
    $this->race = $r;
  }
}