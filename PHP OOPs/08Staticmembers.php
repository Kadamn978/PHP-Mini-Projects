<?php
    class base{
        public static $name = "Google" ;
        
    //    public function __construct($n){
    //        self::$name=$n;
    //        self::show();
    //     }
       public static function show(){
            echo self::$name."\n";
        }   
    }
    class derived extends base{
       public static function show(){
            echo parent::$name."\n";
        }   
    }
    // echo base::$name."\n";
    // base::show();
    // $b1=new base("Google");
    $b1=new derived();
    $b1->show();
    // derived::show();

    ?>