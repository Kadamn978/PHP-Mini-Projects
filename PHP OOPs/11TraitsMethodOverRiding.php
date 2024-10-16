<?php
trait a {
    private function hello() {
        echo "Hello Everyone from trait a!  \n";
    }
}

// trait b {
//     public function hello() {
//         echo "Hello Everyone from trait b!  \n";
//     }
// }

class base1 {
    // use a, b {
    //     a::hello insteadof b; // Use hello() from trait a instead of trait b
    //     b::hello as hi;       // Rename hello() from trait b to hi
    // }
    use a{
        a::hello as public hi;
    }//when method is private in trait
   
}

// Uncomment this class if you want to see inheritance in action
// class base2 extends base1 {
//     public function hello() {
//         echo "Hello Everyone from base2!  \n";
//     }
// }

$b1 = new base1();
$b1->hi(); // Calls the hello() method from trait a
// $b1->hi();    // Calls the renamed method from trait b
?>
