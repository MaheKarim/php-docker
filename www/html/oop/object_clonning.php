<?php
    class FavColor {
        public $data ;

        function __construct($dvata){
            $this->data = $data ;
        }

        /**
         * @param mixed $data
         */
        public function setData($data)
        {
            $this->data = $data;
        }
    }
        $myData = new FavColor('My Data Only');
        $myData1 = clone $myData ;
        $myData1->setData('More Data');

        print_r($myData1);
        print_r($myData);
