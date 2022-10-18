<?php

namespace Data;

class Category
{
    private string $name;
    private bool $expensive;

    // GETTER SETTER
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        // * validasi
        if(trim($name) != "" ){
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
    
}