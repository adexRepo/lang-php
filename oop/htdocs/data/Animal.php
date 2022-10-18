<?php

namespace Data;

require_once 'Food.php';
abstract class Animal 
{
    public string $name;

    abstract public function run():void;

    abstract public function eat(AnimalFood $animalFood):void;

}

class Cat extends Animal
{
    public function run():void
    {
        echo "Cat $this->name is running". PHP_EOL;
    }

    public function eat(AnimalFood $animalFood):void
    {
        echo "Cat is eating ". PHP_EOL;
    }
}

class Anjing extends Animal
{
    public function run():void
    {
        echo "Anjing $this->name is running". PHP_EOL;
    }
    
    public function eat(Food $animalFood):void  // ini namanya contravariance
    {
        echo "Anjing is eating". PHP_EOL;
    }
}