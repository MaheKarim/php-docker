<?php
    class Fund {
        private $fund;

        public function __construct($initialFund = 0)
        {
            $this->fund = $initialFund ;
        }
        public function addFund($money)
        {
            $this->fund += $money;
        }

        public function deductFund($money)
        {
            $this->fund -= $money;
        }

        public function getTotal()
        {
            echo "Total fund amound {$this->fund} \n";
        }

    }

    $ourFund = new Fund(100);
    $ourFund->getTotal();
//    $ourFund->addFund(10);
//    $ourFund->getTotal();
//    $ourFund->deductFund(30);
//    $ourFund->getTotal();