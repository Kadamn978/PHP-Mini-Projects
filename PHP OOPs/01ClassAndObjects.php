<?php

class calculation{
    public $a,$b,$c;

    function add(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    function sub(){
        $this->c=$this->a - $this->b;
        return $this->c;
    }
    function mul(){
        $this->c=$this->a * $this->b;
        return $this->c;
    }
    function divi(){
        $this->c=$this->a / $this->b;
        return $this->c;
    }
}

$c1=new calculation();
$c1->a=30;
$c1->b=10;
echo "the addition of a ,b  is ".$c1->add()."\n";
echo "the subtraction of a ,b  is ".$c1->sub()."\n";
echo "the division of a ,b  is ".$c1->divi()."\n";
echo "the multiplication of a ,b  is ".$c1->mul()."\n";








?>