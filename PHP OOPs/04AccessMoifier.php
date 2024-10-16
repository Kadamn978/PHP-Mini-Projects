<?php
    class base{
        // public $name;
        // protected $name; // Can be accessed through derived class public methods or constructors
        private $name;// private name can be accessed through public constructors or by public functions
        
       public function __construct($n){
            $this->name=$n;
        }
    //    public function show(){
    //         echo "Your Name : ".$this->name;
    //     }
       public function show(){
            echo "Your Name : ".$this->name;
        }
    }

    class derived extends base{
        public function get(){
            echo "Your Name : ".$this->name;
        }    
    }
    // $p1=new base();
//     $p1=new base("Google");
//     $p1->name="Google Mata";
//     $p1->show();
    // $p1=new derived("Google");
    // $p1->get();
    
      $p1=new base("Google");
    $p1->show(); 

?>