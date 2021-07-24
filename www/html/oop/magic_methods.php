<?php
    class Student {

        private $name;
        private $age;
        private $class;

        function __construct($name='', $age='', $class=''){
            $this->name = $name;
            $this->age = $age;
            $this->class = $class;
        }

        public function __get($property)
        {
            return strtoupper($this->$property);
        }

        public function __set($property, $value)
        {
            return $this->$property = $value;
        }
    }

    $assignSomething = new Student('Mahe', '174', '7th');

    $assignSomething->name = "Jamal\n ";

    echo $assignSomething->name;

    print "Show name: {$assignSomething->name}\n";
    print "Show age: {$assignSomething->age}\n";
    print "Show class: {$assignSomething->class}";
