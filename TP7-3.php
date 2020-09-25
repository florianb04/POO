<?php 

class Personne {


    protected $nom ;
    protected $prenom ; 
    protected $adresse ;


    public function __construct($nom, $prenom, $adresse)
    {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->adresse = $adresse ;
    }


    public function getPersonne (){

        return $this->nom.' '.$this->prenom.' habite à : '.$this->adresse.'</br>' ;

    }

//setter adresse pour modifier si necessaire 
    public function setAdresse ($adresse){
        $this->adresse = $adresse ;
    }



}

$toto = new Personne('Toto','DeLaFontaine','Nice');

echo $toto->getPersonne();

$toto->setAdresse('Paris'); 

echo $toto->getPersonne();










?>