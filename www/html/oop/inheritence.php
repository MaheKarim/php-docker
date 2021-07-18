<?php

class Animal {

    protected $name ;  // For Who are Extends Animal Class

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo "{$this->name} Eating";
    }

    public function run()
    {
        echo "{$this->name} Running";
    }

    public function sleep()
    {
        echo "{$this->name} Sleeping";
    }

    public function sayHi() {}
}

    class Human extends Animal {
        public function sayHi()
        {
            echo "Hi, My Name is {$this->name} \n";
        }
    }

    class Cats extends Animal {
        public function sayHi() {
            echo "Hi, This is {$this->name} From Cats \n";
        }
    }

    $newData = new Human('Hati');
    echo $newData->sayHi();

    $newCats = new Cats('Ghora');
    echo $newCats->sayHi();