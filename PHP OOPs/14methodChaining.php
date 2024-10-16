<?php

    class abc{
        public function first(){
            echo "this is first function \n";
            return $this;
        }
        public function second(){
            echo "this is second function \n";
            return $this;
        }
        public function third(){
            echo "this is third function \n";
        }

    }
    $test=new abc();
    $test->first();
    $test->second();
    $test->third();

    $test->first()->second()->third(); 

?>