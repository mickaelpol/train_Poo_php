<?php

class Voiture {
    private $__contenuReservoir;
    private $__indicateurReserveRouge;

    //Methode 
    public function addContenuReservoir ($contenu){
        $this->$__contenuReservoir += $contenu;
        if ($this->$__contenuReservoir < 20) {
            $__indicateurReserveRouge = true;
        } else {
            $__indicateurReserveRouge = false;
        }
    }
}


$uneVoiture = new Voiture;
$uneVoiture->addContenuReservoir(20);