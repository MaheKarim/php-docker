    <?php
    class ShopProduct {

        public $title ;
        public $producerName ;
        public $price= 0 ;

         public function __construct($title, $price, $producerName){
             $this->title = $title;
             $this->producerName = $producerName;
             $this->price = $price;
        }

        /**
         * @return producer Name
         */
        public function getProducer()
        {
            return $this->title . " " .$this->price . " " .$this->producerName ;
        }

    }

    $product1 = (new ShopProduct("Set Of Title", '19.0', 'John Haskel'));

    print "author:  {$product1->getProducer()} \n";