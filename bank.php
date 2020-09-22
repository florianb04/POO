<?php 

class BankAccount {
    
    public $acountNumber;
    public $balance;


    public function __construct($number)
    {
        $this->acountNumber = $number;
        $this->balance=0;

    }

    public function addMoney ($increseBalance)
    {
        if ( $increseBalance < 1000 )
        {
            return 'ajout inssufisant';

        }
        else {
            $this->balance += $increseBalance;
        }

    }

}

$accountOfEric = new BankAccount('FR-123456');
echo $accountOfEric->acountNumber.'</br>';

$accountOfEric->balance=500;
echo $accountOfEric->balance.'</br>';

$accountOfEric->addMoney(15000);
echo $accountOfEric->balance.'</br>';









?>