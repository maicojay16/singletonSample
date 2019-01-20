<?php

include 'BuyPizza.php';

$buyFirstPizza = new BuyPizza();
$buySecondPizza = new BuyPizza();

$buyFirstPizza->buyPizza();
echo 'Jay brought the First pizza - ';
echo $buyFirstPizza->getShopNameAndPizza();

$buySecondPizza->buyPizza();
echo ' and the second pizza - ';
echo $buySecondPizza->getShopNameAndPizza().'<br/>';

