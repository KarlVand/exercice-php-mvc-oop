<?php

declare(strict_types=1);

class ShopItem
{
    protected string $name;
    protected int $amount;
    protected float $price;

    public function __construct(string $name, int $amount, float $price)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
    }

    public function total()
    {
        $total =  $this->amount * $this->price;
        return "The total value of the {$this->amount} {$this->name} is {$total}€";

    }
    public function tax()
    {
        $tax =  $this->amount * $this->price * 0.06;
        return "The tax of the {$this->amount} {$this->name} is {$tax}€ <br>";
    }
}
