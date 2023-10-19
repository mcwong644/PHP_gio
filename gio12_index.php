<?php
echo '<h1> Lesson 12 Operators #1</h1>';
// unary, binary, ternary operators
//arithmetic operators
$x = 10;
$y = 2;
var_dump($x + $y);
var_dump($x - $y);
var_dump($x * $y);
var_dump($x / $y); // result may be float if not divisible
var_dump($x % $y); // floats will be cast to zero. or use fmod()
var_dump($x ** $y);
echo '<br>';
$x='10';
var_dump(+$x + $y); //cast string to int

//fdiv for divide by zero
$x=10;
$y=0;
var_dump(fdiv($x,$y));

//assignment by value
$x=5;
$x *=3; // $x = $x * 3
echo $x++; // use then increment
echo ++$x; // increment then use/echo

//string operators (., .=)
$x='hello';
echo '<br>';
echo $x=$x . 'world';
echo '<br>';
echo $x .= ' friends';

//comparison. strict comparison ===
$x=5;
$y=3;
echo '<br>';
var_dump($x==$y);

$x=5;
$y='2';
echo '<br>';
var_dump($x==$y); //true
var_dump($x===$y); //strict false

// not equal !=, !==, <>, <=, >=, <=>
/*
Spaceship operator <=>
The spaceship operator is used for comparing two expressions. 
It returns -1, 0 or 1 when $a is respectively less than, equal to, 
or greater than $b. Comparisons are performed according to PHP's 
usual type comparison rules.
*/

var_dump($x <=>$y);
echo '<br>';
var_dump(0 == 'Hello'); // int convert to string then compare- false. but php 7 it is true
var_dump(10 == '10'); // int convert to string -true

// ternary ?? ?:
$x='Hello World';
$y = strpos($x,'H');
echo '<br>';
if ($y===false) {
    echo 'H Not found';
} else {
    echo 'H found at index ' . $y;
}
// use  : ?
$result = $y=== false? 'H Not Found': 'H found at index ' . $y;
echo '<br>';
echo $result;
echo '<br>';
// Null coalescing ??
// if $x=null then $y = 'hello'. if $x != null then $y = $x
$x = 'idiot';
$y = $x ?? 'hello';
echo $y;


?>