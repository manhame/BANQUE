<?php

class Titulaire {
    private string $_prenom;
    private string $_nom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private array $_comptes;

    public function __construct($prenom, $nom, $dateNaissance, $ville) {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_ville = $ville;

        $this ->_comptes = []; // on attribue un tableau vide (ou array()) à l'instance courante $this
    } 
/*
public function afficherAge($dateNaissance) {
    $this -> _dateNaissance = date_diff(date_create($dateNaissance),date_create("d-m-Y"));
}*/
    public function ajouterCompte(Compte $compte) { //méthode qui alimente le tableau vide une variable compte après l'autre -> singulier
        $this->_comptes[] = $compte; 
    }
    public function afficherComptes() {
        echo "<h2>Comptes de " .$this->getPrenom()." ".$this->getNom()." âgé de ".$this->CalculerAge()." et domicilié à ".$this->getVille()."</h2>"; //titre h2 car h1 déjà utilisé dans index.php / $this car instances en cours dans ce fichier
        echo "<ul>";
        foreach($this->_comptes as $compte) {
            echo "<li>".$compte->getInfos()."</li>";    //on veut afficher infos des variables instanciées dans classe Compte qui n'est pas dans le fichier présent
        }
        echo "</ul>";
    }

    public function getPrenom() {
        return $this->_prenom;
    }
    public function getNom() {
        return $this->_nom;
    }
    public function getDateNaissance() {
        return $this->_dateNaissance;
    }
    public function getVille() {
        return $this->_ville;
    }
    public function getComptes() {
        return $this->_comptes;
    }

    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    // public function setDateNaissance(float $dateNaissance) {
    //     $this->_dateNaissance->date_diff(date_create($dateNaissance), date_create(date("Y-m-d")));
    //     $this->_format("%y ans");
    // }
    public function setVille (string $ville) {
        $this->_ville = $ville;
    }

    public function CalculerAge(){
        $now = new DateTime();
        $intervale = $this->_dateNaissance -> diff($now);
        return $intervale->format('%y années'); 
    }
    // pas de setComptes() sinon écrase la fonction __construct ou _ajouterCompte ?
}


 

/*
$this->format("%y ans");
*/