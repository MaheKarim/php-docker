<?php

    trait PriceUtilities {

        private $taxRate = 17 ;

        public function calculateTax(float $price): float 
        {
            return (($this->taxRate / 100) * $price); 
        }

        // Another Method Will Start From Here
    }

    class ShopProduct {

        use PriceUtilities;
    }

    abstract class Service {
        // Create Something
    }

    class UtilityService extends Service {

        use PriceUtilities ;
    }

    $p = new ShopProduct();
    print $p->calculateTax(100). "\n";

    $u = new UtilityService();
    print $u->calculateTax(100);

