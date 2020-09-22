<?php 

class BankAccount {
    
    public $acountNumber;
    private $balance;


    public function __construct($number)
    {
        $this->acountNumber = $number;
        $this->balance=99;

    }

// setter = donné une valeur à une propriété 
    public function setBalance ($increseBalance=0)
    {
        if ( $increseBalance > 1000 )
        {
            $this->balance += $increseBalance;
            return 'votre dépot à bien était accepté';
        }
        else {
            return 'dépot inssufisant merci de deposer au minimum 1000€';
        }

    }

// getter = donne la possibilité d'afficher les variables qui seront en private
    public function getBalance ()
    {
        return $this->balance;
    }


}

$accountOfEric = new BankAccount('FR-123456');
echo $accountOfEric->acountNumber.'</br>';

// j'ajoute une valeur et j'affcihe le message contenus dans mes return
echo $accountOfEric->setBalance(3300).'</br>'; 
echo $accountOfEric->getBalance().'</br>';




?>