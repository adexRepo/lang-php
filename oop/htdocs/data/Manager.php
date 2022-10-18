<?php

class Manager{

    var string $name;
    var string $title;

    function __construct(string $name = '', string $title = 'Manager')
    {
        $this->name = $name;
        $this->age = $title;
    }

    function sayHello(string $name):void
    {
        echo "Hello {$name} my name is manager {$this->name}".PHP_EOL;
    }
}


class vicePresident extends Manager{
    // vice president punya semua yang ada di manager
    // karena vice president adalah anaknya manager

    function __construct(string $name = '', string $title = 'vicePresident')
    {
        // BAGUSNYA MANGGIL SI CONSTRUCTOR PARENT NYA !
        // AGAR dipanggil constructor di class parentnya juga
        parent::__construct($name, $title);
    }

    function sayHello(string $name):void
    {
        echo "Hello {$name} my name is vp {$this->name}".PHP_EOL;
    }
}