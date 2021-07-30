<?php
 class ShopProduct {
    private $taxRate = 17 ;

    public function calculateTax(float $price) :float {
        return (($this->taxRate / 100) * $price ); 
    }
}

$p = new ShopProduct();
print $p->calculateTax(100)."\n";
