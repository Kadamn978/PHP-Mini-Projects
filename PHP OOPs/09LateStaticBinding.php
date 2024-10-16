<?php
    class base{
        public static $name = "Google" ;
        
        public static function show(){
            echo self::$name."\n";
        }   
        public static function show(){
            echo static::$name."\n";//Static is used for late binding insted of self 
        }   
    }

    class derived extends base{
        public static $name = "Mata" ;
     
        // protected static function show(){
        //     echo parent::$name."\n";
        // }   
    }
    // echo base::$name."\n";
    // base::show();
    // $b1=new base("Google");
    // $b1=new base();
    $b1=new derived();
    $b1->show();
    // derived::show();

    ?>