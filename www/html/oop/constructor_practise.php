<?php
    class Person {

        public $name , $salary ;

        public function __construct($setName, $setSalary)
        {
            $this->name = $setName;
            $this->salary = $setSalary;
        }
        
        public function show()
        {
            echo "Your name is {$this->name} \n Your Salary is {$this->salary}";
        }
    }

    $getName = new Person('Mahe Karim', '25.000 BDT');
    $getName->show();