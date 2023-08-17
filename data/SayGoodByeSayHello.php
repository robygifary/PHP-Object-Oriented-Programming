<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if(is_null($name)) {
            echo "Selamat Tinggal" . PHP_EOL;
        } else {
            echo "Selamat tinggal $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function sayHello(?string $name): void
    {
        if(is_null($name)) {
            echo "Hai ..." . PHP_EOL;
        } else {
            echo "Hai $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }
    public function sayHello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

trait All 
{
    use SayHello, SayGoodBye, HasName, CanRun {
        // sayHello as private;
        // goodBye as private;
    }
}

class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

}