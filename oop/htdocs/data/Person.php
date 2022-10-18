<?php

class Person{

}

class Orang {
    var $name;
    var $email;
    var $phone;
}

class Manusia {
    var string $name;
    var string $email;
    var int $phone;

    var string $country = "JAKARTA"; // default value

    var ?string $foodFavorite = null; // nullable

}

class Action {
    var string $name;
    var string $email = "ae231h9@gmail.com";

    const umur = 17;
    const AUTHOR = "TRALLALALA";

    function sayHello(string $name){
       echo "Hello {$name}";
    }

    function sayWoi(?string $email){

        if($email == null){
            echo "Woi, email lu {$this->email} bukan ?!" . PHP_EOL;
        }else{
            echo "Ohh, email lu {$email} bukan ini ya {$this->email} ?!" . PHP_EOL;
        }

    }

    function info(){
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}

class Belajar{

    var string $name;
    var ?string $email = null;

    public function __construct(string $name, ?string $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function __destruct(){
        echo "Object Belajar {$this->name} is destroyed" . PHP_EOL;
    }
}

