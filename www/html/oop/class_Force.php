<?php

class Shape {

}

class Shapes
{
    protected $shapes;

    public function __construct()
    {
        $this->shapes = array();
    }

    public function addShape(Shape $shape)
    {
        array_push($this->shapes, $shape);
    }

    public function totalShape()
    {
        return count($this->shapes);
    }
}

class Rectangle extends Shape
{

}

class Triangle extends Shape
{

}

class Emni
{

}

$totalCollection = new Shapes();
$totalCollection->addShape(new Rectangle());
$totalCollection->addShape(new Triangle());
//$totalCollection->addShape(new Emni());

echo $totalCollection->totalShape();