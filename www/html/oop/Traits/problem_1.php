<?php 

    abstract class Service {
        // service oriented stuff
    }

    class UtilityService extends Service {

        private $taxRate = 17 ;
        
        function calculateTax(float $price): float 
        {
            return (($this->taxRate/100) * $price );
        }

    }

    $u = new UtilityService();
    print $u->calculateTax(150)."\n";