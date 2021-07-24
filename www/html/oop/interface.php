<?php
    interface BaseAnimal {
        function isAlive();
        function canEat($param1, $praram2);
        function isActive();
    }

    class Animal implements BaseAnimal {
        function isAlive() {}
        function canEat($param1, $praram2) {}
        function isActive() {}
    }



    // Interface can extends another Interface