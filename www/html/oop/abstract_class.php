<?php
 // Only Use Inherit , Can Not Create Obj

    abstract class BaseClass {

        public function __construct()
        {
            echo "This is Base Class \n";
        }
        abstract function test(); // Abstract Method
    }

    class SubClass extends BaseClass {

        function test()
        {
            echo "This Is Test Function";
        }
    }

    $obj = new  SubClass();
    $obj->test();