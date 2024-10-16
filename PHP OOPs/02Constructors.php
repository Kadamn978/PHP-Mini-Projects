<?php 
// // Normal Class without constructor
// class person{
//     public $name;
    
//     function show(){
//         echo "Your Name : ".$this->name;
//     }
// }
// $p1=new person();
// $p1->name="Google";
// $p1->show();

// Class with COnstructor
class person{
    public $name, $age;
    // public $name="No Name", $age=0;  // default values can be set here for variables
    
// creating a Constrctor
function __construct($n="No Name",$a=0){// default values can be set here for variables
    $this->name=$n;
    $this->age=$a;
}
    function show(){
        echo "Your Name : ".$this->name." Age: ".$this->age;
    }
}
$p1=new person("Google",23 );
$p1->show();

?>
