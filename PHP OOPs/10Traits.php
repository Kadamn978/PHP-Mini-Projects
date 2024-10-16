<?php
    trait a{
        public function sayhello(){
            echo "Hello Everyone !  \n ";
        }
        public function Hi(){
            echo "How are you? !  \n ";
        }
    }
    trait b{
        public function Bye(){
            echo "Bye Everyone !  \n ";
        }
    }
    class base1{
        use a,b;
    }
    class base2{
        use a,b;
    }
    class base3{
        use a,b;
    }
    $b1=new base1();
    $b2=new base2();
    $b3=new base3();
    $b1->sayhello();
    $b2->sayhello();
    $b3->sayhello();
    $b1->hi();
    $b2->hi();
    $b3->hi();
    $b1->bye();
    $b2->bye();
    $b3->bye();
?>