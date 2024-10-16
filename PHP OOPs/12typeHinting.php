<?php
    // function sum($v){
    //     echo $v+10."\n";
    // }
    // sum(10);

    // function fruits(array $name){
    //     foreach($name as $names){
    //         echo "$names \n";
    //     }
    // }
    // $test=array("Apple","Mango","Watermelon","Pineapple","Guava");

    // fruits($test);

    // class a{
    //     public function hello(){
    //         echo "Hello Everyone ";
    //     }
    // }
    // class b{
    //     public function bye(){
    //         echo "Bye Everyone ";
    //     }
    // }
    // function wow(a $c){
    //     $c->hello();
    // }
    // $test= new b();
    // wow($test);
 
    class school{
        public function getNames(students $names){
            foreach($names->name() as $name){
                echo "$name \n";
            }
        }
    }
    class students{
        public function name(){
           return ["ram","Arjun","Pandit","krishna"];
        } 

    }
    class library{

    }

    $lib=new library();
    $stu=new students();
    $sch=new school();
    $sch->getnames($stu);
    

?>