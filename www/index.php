<?php


declare(strict_types=1);
class Beverage 
{
    public string $color;
    public float $price;
    public float $temperature;

    public function __construct(float $temperature)
    {
        $this->temperature = $temperature;
        if ($temperature < 6)
        {
            echo "this drink is cold";
        }
        else {
            echo "this drink is " . $temperature . " it needs to be cooler";
        }
    }
    public function getInfo() :  void
    {
        echo "<p>This beverage is " . $this->temperature  . " degrees and the color is " . $this->color . "</p>";
    }
}


$cola = new Beverage(4);
$cola->color = "black";
$cola->price = 2;
$cola->getInfo();

$lemonade = new Beverage(9);
$lemonade->color = "yellow";
$lemonade->price = 3;
$lemonade->getInfo();

var_dump($cola);

var_dump($lemonade);
