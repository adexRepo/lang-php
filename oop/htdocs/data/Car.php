<?php

namespace Data;

interface HasBrand
{
    public function getBrand(): string;
}

interface IsMaintenance
{
    public function getMaintenance(): string;
}

interface Car extends HasBrand
{
    function drive(): void;

    function getType(): string;
}

class BMW implements Car, IsMaintenance
{
    public function drive():void
    {
        echo "Driving" . PHP_EOL;
    }

    public function getType():string
    {
        return "BMW123". PHP_EOL;
    }

    public function getBrand(): string
    {
        return "BMW". PHP_EOL;
    }

    public function getMaintenance(): string
    {
        return "Maintenance". PHP_EOL;
    }
}