<?php

class Student {
    public string $id;
    public string $name ;
    public int $value;
    private string $contoh;

    public function setContoh(string $contoh) : void
    {
        $this->contoh = $contoh;
    }

    public function getContoh() : string
    {
        return $this->contoh;
    }

    public function __clone()
    {
        unset ($this->contoh); // artinya properties si contoh tidak akan di duplikasi
    }

    /* -------------------------------------------------------------------------- */
    /*                               MAGIC FUNCTION                               */
    /* -------------------------------------------------------------------------- */

    // * Magic __toString()
    public function __toString():string
    {
        return "Student __toString: {$this->id} {$this->name} {$this->value} {$this->contoh}";
    }

    // * Magic __invoke()
    public function __invoke(...$args):void
    {
        $join = join(',', $args);
        echo "Student __invoke with argument: {$join}";
    }

    // * Magic __debugInfo()
    public function __debugInfo():array
    {
        echo "Student __debugInfo() / var_dump()";
        echo PHP_EOL;
        return [
            'id' => $this->id,
            'name' => $this->name,
            'value' => $this->value,
            'author' => "Adek Kristiyanto"
        ];
    }

}