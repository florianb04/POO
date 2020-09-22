<?php 

class Person // creation de la classe (bluePrint)
    {
        public $firstName;
        public $lastName;
        public $age;

        public function __construct($prenom, $nom, $age)
        {
        // $this est utiliser pour accéder au données de l'objet en cours d'exécution
        $this->firstName = $prenom;
        $this->lastName = $nom;
        $this->age = $age;
        }

        public function danser ()
        {
            echo $this->firstName.' est en train de danser </br>';
        }
    }   

// instantiation 'eric' de la classe Person  
$prof1 = new Person ('Eric','Devolder',52); 
// Je suis donne les valeurs qui vont etre récupérer 
// dans la fonction __construct pour étre affecter aux attibuts de class

echo $prof1->firstName.'</br>';
echo $prof1->lastName.'</br>';
echo $prof1->age.'</br>';

$prof1->danser();


$prof2 = new Person ('Mamadou','Sall',36); 
$prof2->danser();




// echo '<pre>' ;
// print_r($prof1);
// echo '</pre>' ;



?>