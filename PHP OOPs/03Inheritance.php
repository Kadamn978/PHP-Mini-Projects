<?php
class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){
        $this->name=$n;
    $this->age=$a;
    $this->salary=$s;
    }

    // function __construct(){
    //     echo "Employee COnstructor";
    //    }

    function info(){
        echo " Employee Profile \n";
        echo "Your Name : ".$this->name."\n";
        echo" Age: ".$this->age."\n";
        echo " salary: ".$this->salary."\n";
    }
}

class manager extends employee{
    public $ta=1000;
    public $phone=500;
    public $total;
    // function __construct(){
    //  echo "Manager COnstructor";
    // }
    function info(){
        $this->total = $this->salary + $this->ta + $this->phone; 
        echo " Employee Profile \n";
        echo "Your Name : ".$this->name."\n";
        echo" Age: ".$this->age."\n";
        echo " salary: ".$this->total."\n";
    }
}
// $e1=new employee();
$e1=new employee("Ram",23,25000);
$m1=new manager("Ramanujan",32,25000);
$e1->info();
echo"\n";
$m1->info(); 
?>