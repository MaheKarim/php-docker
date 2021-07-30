<?php 

    class Life {

        public $fuel = "LifeTime";
        public function component(){
            echo "This is component From Life ";
        }
    }

    trait FuelTrait {

        // public function component(){
        //     echo "This is component from Fuel Trait " . $this->fuel;
        // }

        public function component()
        {
            echo "This component from Fuel Trait  ".parent::component().$this->fuel;
        }
    }

    class Tree extends Life {
        use FuelTrait;
    }

    $isLive = new Tree();
print $isLive->component();