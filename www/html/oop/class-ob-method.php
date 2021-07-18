<?php

    class Human {
        // Naming Convention: First Letter should Big
        public $name; // Human Class Property
        // Write a Method
        function sayHi() {
            echo "Write a method on a Class with Mahe \n";
        }

        function sayName() {
            echo " Listen Carefully, This Boy {$this->name}";
        }

        // In Class, Class Own Method If Want Access Any Own Class Property You Have Initialize $this
    }

    class Cat {
        function sayHi() {
            echo "Cat method \n";
        }
    }
    // CLass is a Skeleton of A Object

    // Create Object
    $humanOne = new Human();
    $humanOne->name = "Mahe karim, Learning OOP\n";  // We Can Assign Get , Set , Read Property

//    $catOne = new Cat();

    // Access Their Method / Property
//    $humanOne->sayHi();
//    echo $humanOne->name;
    $humanOne->sayName();

//    $catOne->sayHi();
    // sayHi() showing different behaviour because of Class Scope
