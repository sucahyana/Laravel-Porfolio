<?php

namespace App\Data;

class bar
{
    public foo $foo;

    public function __construct (foo $foo)
    {

        $this->foo=$foo;
    }

    public function bar(): string
    {

    }
}
