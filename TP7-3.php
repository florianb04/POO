<?php 

class Person {


    protected $nom ;
    protected $prenom ; 
    protected $adresse ;


    public function __construct($nom, $prenom, $adresse)
    {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->adresse = $adresse ;
    }

    public function __destruct()
    {
        echo $this->nom.' '.$this->prenom.' est suprimé </br>' ;
    }


    public function getPerson (){

        return $this->nom.' '.$this->prenom.' habite à : '.$this->adresse.'</br>' ;

    }

//setter adresse pour modifier si necessaire 
    public function setAdresse ($adresse){
        $this->adresse = $adresse ;
    }



}

$toto = new Person('DeLaFontaine','Toto','Nice');

echo $toto->getPerson();

$toto->setAdresse('Paris'); 

echo $toto->getPerson();

// l'objet se détruit automatiquemennt dès qu'il n'est plus utiliser dans la suite du code
// UNSET($toto);

// echo $toto->getPerson();












?>