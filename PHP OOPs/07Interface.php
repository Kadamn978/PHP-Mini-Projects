<?php
    interface a{
        function calc($a,$b);
    }
    interface b{
        function sum($c,$d);
    }

    class c implements a,b{
        public function calc($a,$b){
            echo ($a*$b);
       }
        public function sum($a,$b){
            echo ($a+$b);
       }
    }
    $p1=new c();
    $p1->calc(5,10);
?>