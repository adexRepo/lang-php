<?php

interface HelloWorld
{
    function sayHello():void;
}

// cara tanpa anonymous
class SampleHelloWorld implements HelloWorld
{
    public function sayHello():void
    {
        echo "Hello World!" . PHP_EOL;
    }
}

$sample = new SampleHelloWorld();

// cara dengan anonymouse
$helloWorld = new class implements HelloWorld
{
    public function sayHello():void
    {
        echo "Hello World!" . PHP_EOL;
    }
};

// $helloWorld->sayHello();


// make a constructor in anonymous class
$helloWorld2 = new class("ADEK") implements HelloWorld
{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function sayHello():void
    {
        echo "Hello World!" . PHP_EOL;
    }
};