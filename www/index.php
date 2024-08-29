<?php


declare(strict_types=1);
class Beverage 
{
    public string $color;
    public float $price;
    public string $temperature;

    public function getInfo()
    {
        echo "<p>This beverage is " . $this->temperature  . "and " . $this->color . "</p>";
    }
}


$cola = new Beverage;
$cola->color = "black";
$cola->price = 2;



$colaInfo = $cola->getInfo();

var_dump($colaInfo);
