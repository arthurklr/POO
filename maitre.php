<?php

class Maitre {
    public $Nom;
    public $Metier;
    public $Pays;
    public $NomChien;
    public $Race;

    public function __construct($n, $m, $p, $nc = null, $r = null) {
        $this->Nom = $n;
        $this->Metier = $m;
        $this->Pays = $p;
        $this->NomChien = $nc;
        $this->Race = $r;
    }

    public function details() {
        $message = "<div>";
        $message .= "<div>".$this->Nom."<b> ".$this->Metier." </b>en ".$this->Pays."</div>";

        if ($this->NomChien && $this->Race) {
            $message .= "<div>est le maître d'un chien.</div>";
            $message .= "<div>Le chien s'appelle ".$this->NomChien.".</div>";
            $message .= "<div>Il est de race ".$this->Race.".</div>";
        } else {
            $message .= "<div>ne possède pas de chien.</div>";
        }

        $message .= "</div>";
        return $message;
    }

    /*public function affecter($nomChien, $Race) {
        $this->NomChien = [
            'nom' => $nomChien,
            'race' => $Race
        ];
    }*/
}
