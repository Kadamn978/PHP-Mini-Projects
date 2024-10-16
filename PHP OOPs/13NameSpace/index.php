<?php
    required 'product.php';
    required 'testing.php';

$obj = new test\product();
$obj1 = new pro\product();

function wow(){
    echo "wow from index file \n";
}

wow();// display the wow from index file
pro\wow();//display the wow finction from product page
$test= new pro\product();// creating object from testing file

// we can shorten the namespace names like- pro/v1/command as cmd as it will work same as pro/v1/command

?>