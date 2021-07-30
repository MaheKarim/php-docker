<?php

    trait PriceUtilities {

        private $taxRate = 17 ;

        public function calculateTax(float $price): float 
        {
            return (($this->taxRate / 100) * $price); 
        }

        // Another Method Will Start From Here
    }

    //  Using One More Trait
    
     trait IdentityID {
         public function generateID() {
             return uniqid();
         }
     }

    class ShopProduct {

        use PriceUtilities;
    }

    abstract class Service {
        // Create Something
    }

    class UtilityService extends Service {

        use PriceUtilities, IdentityID ; // Initialized Trait: We can use multiple traits
    }

    $p = new ShopProduct();
    print $p->calculateTax(10) . "\n";

    $u = new UtilityService();
    print $u->calculateTax(99) . "\n";
    print $u->generateID(); // Accessing Method

