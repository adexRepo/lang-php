<?php

namespace Data;

require_once "Animal.php";

interface AnimalShelter
{
    function adopt(string $name):Animal; // return type Animal
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name):Cat // return type Cat >> fitur covariance
    {
        $cat = new Cat();
        $cat->name = $name;

        return $cat;
    }
}

class AnjingShelter implements AnimalShelter
{
    public function adopt(string $name):Anjing// return type Anjing >> fitur covariance
    {
        $anjing = new Anjing();
        $anjing->name = $name;

        return $anjing;
    }
}