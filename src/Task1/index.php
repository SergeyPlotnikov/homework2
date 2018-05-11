<?php
/**
 * Created by PhpStorm.
 * User: Serhii
 * Date: 11.05.2018
 * Time: 20:56
 */
include_once '../../vendor/autoload.php';
$coinMarket = new \Cryptocurrency\Task1\CoinMarket();
$coinMarket->addCurrency(new \Cryptocurrency\Task1\Bitcoin(8700));
$coinMarket->addCurrency(new \Cryptocurrency\Task1\Ethereum(679));
$coinMarket->addCurrency(new \Cryptocurrency\Task1\Dogecoin(0.0046));

echo '<pre>';
print_r($coinMarket->getCurrencies());
echo '<pre>';
echo 'maxPrice = ' . $coinMarket->maxPrice();