<?php 

class Person // creation de la classe (bluePrint)
    {
        public $firstName='eric';
        public $lastName;
        public $age;

        const TETE = 1;


        protected static $totalCount = 0 ;


        public function __construct()
        {
            static::$totalCount++;
        }


        // getter = donne la possibilité d'afficher les variables qui seront en private
    public static function getTotalCount ()
        {
            return static::$totalCount;
        }
    
    }   

$person1 = new Person;
$person2 = new Person;
$person3 = new Person;

// façon d'acceder avec le :: aux propriétes static de la class
echo Person::getTotalCount().'<br>';

// acceder à une constante
echo Person::TETE.'<br>';





// echo '<pre>' ;
// print_r($prof1);
// echo '</pre>' ;



?>