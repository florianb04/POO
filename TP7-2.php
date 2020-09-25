<?php 

class Ville {
    
    protected $nom;
    protected $departement;




    public function __construct($nom, $departement )
    {
        $this->nom = $nom;
        $this->departement= $departement;

    }



// affiche $nom et $departement
    public function getVille() {
    return 'la ville '.$this->nom.' est dans le département '.$this->departement;
    }


// getter nom
    public function getNom (){

        return $this->nom;

    }


// getter departement
    public function getDepartement (){

        return $this->departement;

    }

}


$ville1 = new Ville ('Nice','PACA');


echo $ville1->getVille();




?>