<?php


declare(strict_types=1);

class Beverage
{
    private string $name;
    private string $color;
    private float $price;
    private float $temperature;

    const BAR_NAME = 'Het Vervolg';
    

   
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
        return "<br><br> Name: " . $this->name . " : €" . $this->price . "<br><p>(This beverage is " . $this->temperature  . " degrees and the color is " . $this->color . ")</p>";
    }
    function barName() : string
    {
        return ('BAR_NAME');
    }
}



class AlcoholicBeverage extends Beverage
{
    protected float $alcoholPercentage;
    protected string $typeOfBeer;

    public function __construct(string $name, string $color, float $price, float $temperature, float $alcoholPercentage, string $typeOfBeer)
    {
        parent::__construct($name, $color, $price, $temperature);
        $this->alcoholPercentage = $alcoholPercentage;
        $this->typeOfBeer = $typeOfBeer;
    }

    public function getIntel(): string
    {
        return $this->getInfo();
        
    }

    public function beerInfo()
    {
        echo "<br>This is a {$this->typeOfBeer}, This beer has an alcohol percentage of {$this->alcoholPercentage}%";
    }

    public function barName(): string
    {
        return parent::BAR_NAME;
    }
   
}

$lafroufrou = new AlcoholicBeverage("la FrouFrou", "blond", 3, 3, 7, "lager");

echo Beverage::BAR_NAME;
echo "<br>";
echo $lafroufrou->getInfo() . "\n";
echo $lafroufrou->checkTemperature() . "\n";
echo $lafroufrou->beerInfo() . "\n";





$duvel = new AlcoholicBeverage("Duvel", "blond", 3.5, 3, 8.5, "lager");
echo "<br><br><br>";
echo $duvel->barName();
echo $duvel->getInfo() . "\n";
echo $duvel->checkTemperature() . "\n";
echo $duvel->beerInfo();


