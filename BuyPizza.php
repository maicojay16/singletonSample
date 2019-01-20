<?php 

include 'Pizza.php';

class BuyPizza 
{
    private $buyPizza;
    private $firstPizza = FALSE;
    private $secondPizza;
    
    public function __construct() 
    {

    }

    function getShopNameAndPizza() 
    {
        if (TRUE == $this->firstPizza) {
            return $this->buyPizza->getFirstPizza();
        } else {
            $this->secondPizza = Pizza::second();
            return $this->secondPizza->getSecondPizza();
        } 
    }


    function buyPizza() 
    {
        $this->buyPizza = Pizza::orderPizza();

        if ($this->buyPizza == NULL) {
            $this->firstPizza = FALSE;
        } else {
            $this->firstPizza = TRUE;
        }
    }



}
