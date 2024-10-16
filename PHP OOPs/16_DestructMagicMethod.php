<?php
//magic methods starts with underscore 2 times (__)
    class abc{
        // public function __construct(){
        //     echo "this is Construct Function \n";
        // }
        // public function hello(){
        //     echo "this is hello Function \n";
        // }
        // public function __destruct(){
        //     echo "this is Destruct Function \n";
        // }
        //real life eg of const-> process -> destruct
        private $conn;
        public function __construct(){
            $this->conn = mysqli_connect();
        }
        public function insert(){
            echo "Hello Everyone \n";
        }
        public function __destruct(){
            mysqli_close($this->conn);
        }

    }
    $test = new abc();
    // $test->hello();
    // $test->hello();
    // $test->hello();

    $test->insert();

 
 