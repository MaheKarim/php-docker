<?php 

    // trait MyTrait {
    //     public function fly()
    //     {
    //         echo "We are going to Jamalpur - Kurigram \n";
    //     }
    // }

    class Flyable {

        public function fly()
        {
            echo "We are going to Jamalpur - Kurigram \n";
        }

        public function Engine()
        {
            echo "Let us ride ";
        }
    } 

    class Plane extends Flyable{
    }

    class Helicopter extends Flyable{
    }

    class Car {
        public function Engine()
        {
            echo "Let us ride with train ";
        }
    }


    $plane = new Plane();
    $helicopter = new Helicopter();
    $plane->fly();
    $helicopter->fly();

    $car = new Car();
    print $car->Engine();