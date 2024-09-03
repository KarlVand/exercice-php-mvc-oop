<?php

declare(strict_types=1);



class AlcoholItem extends ShopItem
{
    public function tax()
    {
        $tax =  $this->amount * $this->price * 0.21;
        return "The tax of the {$this->amount} {$this->name} is {$tax}€ <br>";
    }
}
