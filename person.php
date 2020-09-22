<?php 

class Person // creation de la classe (bluePrint)
    {
        protected $firstName='Eric';

    }   


// creation de 'Policeman' fille de Person  
    class Policeman extends Person 
    {

        // creation du getter
        public function getFirstName ()
        {
            return $this->firstName;
        }


    }

// instantiation de Policeman
$policier1 = new Policeman ;

// on doit utiliser un getter pour acerder à une donnée protected via l'héritage
echo $policier1->getFirstName();



?>