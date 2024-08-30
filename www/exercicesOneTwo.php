<?php


declare(strict_types=1);
class Beverage
{
    public string $name;
    public string $color;
    public float $price;
    public float $temperature;

   
    public function __construct(string $name, string $color, float $price, float $temperature)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function checkTemperature()
    {
        if ($this->temperature < 6){
            return "this drink is cold\n";
        } else {
            return "this drink is hot, put it back in the fridge";
        }
    }
    public function getInfo()
    {
        echo "\n Nom: " . $this->name . " : €" . $this->price;
        echo "<p>(This beverage is " . $this->temperature  . " degrees and the color is " . $this->color . ")</p>";
    }
}



$cola = new Beverage("Kola", "black", 2, 4);
echo $cola->getInfo() . "\n";
echo $cola->checkTemperature() . "\n";

$lemonade = new Beverage("Lemoon", "yellow", 2, 9);
echo $lemonade->getInfo() . "\n";
echo $lemonade->checkTemperature() . "\n";

class AlcoholicBeverage extends Beverage
{
    public float $alcoholPercentage;
    public string $typeOfBeer;

    public function __construct(string $name, string $color, float $price, float $temperature, float $alcoholPercentage, string $typeOfBeer)
    {
        parent::__construct($name, $color, $price, $temperature);
        $this->alcoholPercentage = $alcoholPercentage;
        $this->typeOfBeer = $typeOfBeer;
    }

    public function getInfo()
    {
        return parent::getInfo() . ", This is a {$this->typeOfBeer}, This beer has an alcohol percentage of " . $this->alcoholPercentage . "%";
    }
}

$lafroufrou = new AlcoholicBeverage("la FrouFrou", "blond", 3, 3, 7, "lager");
echo $lafroufrou->getInfo() . "\n";
echo $lafroufrou->checkTemperature() . "\n";


$duvel = new AlcoholicBeverage("Duvel", "blond", 3.5, 3, 8.5, "lager");
echo $duvel->getInfo() . "\n";
echo $duvel->checkTemperature() . "\n";


