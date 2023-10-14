<?php
// declare(strict_types=1);
// https://youtu.be/KH4MmQsCDuw?si=dyYRv2QtpS6jv3g-

echo '<h1>Chap4 Data Types, Type Casting</h1>';

# 4 scalar types
    # bool - true/false
    $completed = true;
    # int - 1,2,3,4,5
    $score=75;
    # float 
    $price=0.99;
    # string
    $greeting='hello gio';
    echo '<u>4 scalar types</u><br>';
    echo $completed . ' type is' . gettype($completed) . '<br>';
    echo "{$score} " . ' type is ' . gettype($score) . '<br>';
    echo "$price <br>";
    echo $greeting . '<br>';
    echo 'gettype($completed) is ' . gettype($completed) .'<br>';
    echo '<strong>var_dump($greeting) : </strong>';
    var_dump($greeting);
    echo '<br>';

# 4 compound types
    # array
    $companies=[1,2,3,4,0.5,-9.2,'A','b',true];
    echo '<pre>';
    print_r($companies);
    echo '</pre>';
    # object //later separate video
    # callable //later separate video
    # iterable //later separate video

# 2 spacial types
    # resource //later separate video
    # null


function sum($x,$y) {
    return $x + $y;
}    

echo 'sum(2,3) : ' . sum(2,3);

// type juggling or type coercion
// Error when use declare(strict_types=1)!!!
function sum2(int $x, int $y) {
    return $x + $y;
}    
echo '<br>';

// Error when use declare(strict_types=1)!!!
echo "type coercion - sum2(2,'3') : " . sum2(2,'3');

function sum3(int $x, int $y) {
    return $x + $y;
}    
echo '<br>';
echo "type coercion - sum3(2,'3') : " . sum3(2,'3');

// type casting
$x= (int)'5';

?>