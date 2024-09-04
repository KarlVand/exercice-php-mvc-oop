<?php

declare(strict_types=1);



class AlcoholItem extends ShopItem
{
    public function total()
    {
        $total =  $this->amount * $this->price;
        return "The total value of the {$this->amount} {$this->name} is {$total}€";

    }
    public function tax()
    {
        $tax =  $this->amount * $this->price * 0.21;
        return "The tax of the {$this->amount} {$this->name} is {$tax}€ <br>";
    }
}
