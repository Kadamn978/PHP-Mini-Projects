<?php
namespace pro; //we can make long namesapce names as pro/v1/command
    class product{
        public function __construct(){
            // echo "This is product class \n";
            $test= new \test\product;// creating object from testing file
        }
    }
    function wow(){
        echo "wow from product file \n";
    }

?>