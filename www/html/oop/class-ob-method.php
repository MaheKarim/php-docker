<?php

    class Human {
        // Naming Convention: First Letter should Big
        public $name; // Human Class Property
        // Write a Method
        function sayHi() {
            echo "Write a method on a Class with Mahe \n";
            $this->sayName();
        }

        function sayName() {
            echo " Listen Carefully, This Boy $this->name";
        }

        // In Class, Class Own Method If Want Access Any Own Class Property You Have Initialize $this
    }

    // CLass is a Skeleton of A Object

    // Create Object
    $humanOne = new Human();
    $humanOne->name = "Mahe karim, Learning OOP in PHP\n";  // We Can Assign Get , Set , Read Property



    // Access Their Method / Property

//    $humanOne->sayName();
    $humanOne->sayHi();

