<?php 

class Ville {
    
    protected $nom;
    protected $departement;



    public function getVille() {
    return 'la ville '.$this->nom.' est dans le département '.$this->departement;
    }


// setter nom
    public function setNom ($nom){

        $this->nom=$nom;

    }

// getter nom
    public function getNom (){

        return $this->nom;

    }

// setter departement
    public function setDepartement ($departement){

        $this->departement=$departement;

    }

// getter departement
    public function getDepartement (){

        return $this->departement;

    }

}


$ville1 = new Ville ();

$ville1->setNom('Nice');
$ville1->setDepartement('PACA');

// echo $ville1->getNom();

echo $ville1->getVille();




?>