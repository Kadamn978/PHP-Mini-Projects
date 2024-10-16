<?php
    class a{
        public $name ="Parent Class";
        public function calc($a,$b){
             return $a+$b;
        }
    }
    class b extends a{
        public $name ="Child class Class";
        public function calc($a,$b){
            return $a*$b;
       }
    }
    $p1=new a();
    $p1->name;
    echo $p1->calc(5,10);
?>