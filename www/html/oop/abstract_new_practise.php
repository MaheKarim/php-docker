<?php

 abstract class Karim {

     abstract public function name(): string;

     public function nameWithSuffix(): string
     {
         return $this->name() . ' Karim' ;
     }
 }

    class PrintWithSuffix {
        public function print(Karim $suffix) {
            echo $suffix->nameWithSuffix();
        }
    }

 class Mahe extends Karim {
     public function name(): string
     {
         return "Mahe";
     }
 }

 $echo = new Mahe();