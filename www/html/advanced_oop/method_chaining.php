<?php
    class Bill {
        public $fol = 5 ;
        public $drink = 10 ;
        public $bill ;

        public function fol($person) {
            $this->bill += $this->fol * $person ;
            return $this ;
        }

        public function drink($can){
            $this->bill += $this->drink * $can ;
            return $this ;
        }
    }

    $bill = new Bill();
  print  $bill->fol(5)->drink(5)->bill;

