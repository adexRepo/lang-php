<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }
        else{
            echo "Good Bye " . $name . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if(is_null($name)){
            echo "Hello " . PHP_EOL;
        }
        else{
            echo "Hello " . $name . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson 
{
    public function Hello (?string $name):void
    {
        echo "Hello " . $name . PHP_EOL;
    }

    public function goodBye (?string $name):void
    {
        echo "Good Bye " . $name . PHP_EOL;
    }
}

// yang parent akan di override oleh trait
// yang trait akan di override si child


trait All
{
    use SayHello, SayGoodBye,HasName,CanRun;
}

class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "$this->name Running" . PHP_EOL;
    }

    // public function Hello(?string $name):void
    // {
    //     echo "Hello in Person " . $name . PHP_EOL;
    // }

    // public function goddBye (?string $name):void
    // {
    //     echo "Good Bye in Person " . $name . PHP_EOL;
    // }

}

