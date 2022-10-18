<?php

class Product
{
    private string $name;
    protected int $price;
    
    public function __construct(?string $name, ?int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }
    
}


class ProductDummy extends Product{
    public function info()
    {
        echo "Product Dummy" . PHP_EOL;
        // echo "name $this->name" . PHP_EOL; // will error because private
        echo "price $this->price" . PHP_EOL; // not error because protected and this is subclass
    }
}