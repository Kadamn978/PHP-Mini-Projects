<?php
    abstract class a{
        protected $name ;
        abstract protected function calc($a,$b);
    }

    class b extends a{
        public function calc($a,$b){
            echo ($a*$b);
       }
    }
    $p1=new b();
    $p1->calc(5,10);
?>