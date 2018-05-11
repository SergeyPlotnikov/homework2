<?php
/**
 * Created by PhpStorm.
 * User: Serhii
 * Date: 11.05.2018
 * Time: 20:34
 */
declare(strict_types = 1);
namespace Cryptocurrency\Task1;


class Ethereum implements Currency
{
    private $name = "Ethereum";
    private $logo = "https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png";
    private $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLogoUrl(): string
    {
        return $this->logo;
    }

    public function getDailyPrice(): float
    {
        return $this->price;
    }
}