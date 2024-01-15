<?php
class Compte {
    private string $_libelle;
    private float $_soldeInitial;
    private string $_deviseMonetaire;
    private Titulaire $_titulaire;
   
    public function __construct($libelle,$soldeInitial,$deviseMonetaire,Titulaire $titulaire) {
        $this->_libelle=$libelle;
        $this->_soldeInitial=0;
        $this->_deviseMonetaire=$deviseMonetaire;
        $this->_titulaire=$titulaire;

        $this->_titulaire->ajouterCompte($this);
    }

    public function getLibelle() {
        return $this->_libelle;
    }
    public function getSoldeInitial() {
        return $this->_soldeInitial;
    }
    public function getDeviseMonetaire() {
        return $this->_deviseMonetaire;
    }
    public function getTitulaire() {
        return $this->_titulaire;
    }
    public function getInfos() {
        return $this->_libelle." : ".$this->_soldeInitial." ".$this->_deviseMonetaire." "."<br>";
    }

    public function setLibelle(string $libelle) {
        $this->_libelle = $libelle;
    }
    public function setSoldeInitial(float $soldeInitial) {
        $this->_soldeInitial = $_soldeInitial;
    }
    public function setDeviseMonetaire(string $deviseMonetaire) {
        $this->_deviseMonetaire = $deviseMonetaire;
    }
    /*
    public function setTitulaire (string $titulaire) {
        $this -> _titulaire= $titulaire;
    } */

    public function crediter($credit) {
        $this->_soldeInitial += $credit;
    }
    public function debiter($debit) {
        $this->_soldeInitial -= $debit;
    }
    public function virer($montant,Compte $compteCible) {
        $this->_soldeInitial -= $montant;
        $compteCible->_soldeInitial += $montant;
            }
    /*
    public function virer($virement) {
        $this -> _soldeInitial -= $debit;
    } */
}



