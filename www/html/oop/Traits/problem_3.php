<?php

    trait PriceUtilities {

        private $taxRate = 17 ;

        public function calculateTax(float $price): float 
        {
            return (($this->taxRate / 100) * $price); 
        }

        // Another Method Will Start From Here
    }

       // Interface Introduce 

       interface IdentityObject {
        public function generateId(): string;
    }
    //  Using One More Trait
    
     trait IdentityID {
         public function generateId(): string {
             return uniqid();
         }
     }

 
     
    class ShopProduct implements IdentityObject{

        use PriceUtilities, IdentityID;

      
    }
    public static function storeIdentityObject(IdentityObject $idobj) 
    {
        // do something 
        echo "$idobj";
    }
  


    $p = new ShopProduct();
    self::storeIdentityObject($p);
    print $p->calculateTax(10) . "\n";
    print $p->generateID() . "\n";




