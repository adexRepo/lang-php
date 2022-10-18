<?php

class Programmer
{
    public string $name;


    public function __construct(string $name = '')
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
    public function sayHello(string $name):void
    {
        echo "Hello {$name} my name is backend programmer {$this->name}".PHP_EOL;
    }
}

class FrontendProgrammer extends Programmer
{
    public function sayHello(string $name):void
    {
        echo "Hello {$name} my name is frontend programmer {$this->name}".PHP_EOL;
    }
}

class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer(programmer $programmer):void
{
    // echo "Hello programmer {$programmer->name}".PHP_EOL;

    if($programmer instanceof BackendProgrammer)
    {
        $programmer->sayHello($programmer->name);
    }
    else if($programmer instanceof FrontendProgrammer)
    {
        $programmer->sayHello($programmer->name);
    }else{
        echo "Hello {$programmer->name}".PHP_EOL;
    }
}