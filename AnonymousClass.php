<?php

interface HelloWorld
{
    function sayHello(): void;
}

$helloWorld = new class("robby") implements HelloWorld {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "hello World $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();