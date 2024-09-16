<?php

namespace App;

class HelloDep
{

    public function __construct(private string $name) {

    }

    public function sayHello()
    {
        return "Hello ".$this->name;
    }
}
