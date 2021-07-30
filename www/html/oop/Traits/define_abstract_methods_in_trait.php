<?php

    trait PriceUtilities {

        abstract function getTaxRate(): float;

        public function calculateTax(float $price): float
        {
            # code...
            return (($this->getTaxRate()/ 100) * $price);
        }
    }
    class Service {
        // nothing to do here
    }
    class UtilityService extends Service {
        
        use PriceUtilities;

        public function getTaxRate(): float
        {
            return 17.00;
        }
    }

    $result = new UtilityService();
   print $result->calculateTax(100);