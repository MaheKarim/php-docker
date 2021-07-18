<?php

class RGB {

    private $color ;
    private $red ;
    private $green ;
    private $blue ;

    public function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, '#');
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
    }

    private function parseColor()
    {

    }

}