<?php
class Compte {
    private string $_libelle;
    private float $_soldeInitial;
    private string $_deviseMonetaire;
    private Titulaire $_titulaire;
   
    public function __construct(string $libelle, float $soldeInitial,string $deviseMonetaire,Titulaire $titulaire) {
        $this->_libelle = $libelle;
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
    public function getTitulaire() {  //?
        return $this->_titulaire;
    }
    public function getInfos() {
        return $this->_libelle." : ".$this->_soldeInitial." ".$this->_deviseMonetaire."<br>";
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

    public function crediter(float $credit) {
        $this->_soldeInitial += $credit;
    }
    public function debiter(float $debit) {
        $this->_soldeInitial -= $debit;
    }
    public function virer(float $montant,Compte $compteCible) { //dans cette classe ?
        // $this->_soldeInitial -= $montant;
        // $compteCible->_soldeInitial += $montant;
        $this->debiter($montant);   // débiter le compte source
        $compteCible->crediter($montant); // créditer le compte cible
    }
}



