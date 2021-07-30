<?php 

    trait FlyTrait {
        abstract public function fly();

       public function hello()
        {
            echo "I am from Fly Trait \n";
        }
    }

    trait EngineTrait {
        public function hello() {
            echo "I am from Engine Trait \n";
        }
    }

    class Car {
        use FlyTrait, EngineTrait{
            FlyTrait::hello insteadof EngineTrait;
            EngineTrait::hello as EngineHello;
        }

        public function fly () 
        {
            echo "There are From Car Fly";
        }
       
    }

    $car = new Car();
    $car->hello();
    $car->EngineHello();