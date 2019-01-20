<?php
    
class Pizza 
{

    private $firstShopName = 'Yellow Cab';
    private $secondShopName = 'Pizza Hut';

    private $hawaiianPizza  = 'Hawaiian Pizza';
    private $cheesePizza  = 'Cheese Pizza';

    private static $haveYourFirstPizza = NULL;
    private static $orderPizza = FALSE;

    private function __construct() 
    {

    }

    public function orderPizza() 
    {
        if (FALSE == self::$orderPizza) {
            if (NULL == self::$haveYourFirstPizza) {
                self::$haveYourFirstPizza = new Pizza();
            }
            self::$orderPizza = TRUE;
            return self::$haveYourFirstPizza;
        } else {
            return NULL;
        }
    }

    public function second()
    {
        self::$haveYourFirstPizza = new Pizza();
        return self::$haveYourFirstPizza;
    }

    public function getFirstShop() 
    {
        return $this->firstShopName;
    }

    public function getSecondShop() 
    {
        return $this->secondShopName;
    }

    public function getHawaiianPizza() 
    {
        return $this->hawaiianPizza;
    }

    public function getCheesePizza() 
    {
        return $this->cheesePizza;
    }

    public function getFirstPizza() 
    {
      return $this->getHawaiianPizza() . ' in ' . $this->getFirstShop();
    }

    public function getSecondPizza() 
    {
        return $this->getCheesePizza() . ' in ' . $this->getSecondShop();
    }


}


 