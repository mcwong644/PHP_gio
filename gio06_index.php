<?php
echo '<h1> Lesson 6 Integers</h1>';
// integers
echo PHP_INT_MAX;

$x = 5;
$y=0x2A; //hex
$z=010; //precede with '0' for octal. 010 = dec 8
$z1=055; //octal dec=45
$b=0b110; //binary precede with '0b' 0b110 = dec 6

echo $x . '<br>';
echo $y . '<br>';
echo $z . '<br>';
echo $z1 . '<br>';
echo $b . '<br>';

$x=(int) false;
var_dump($x);
echo '<br>';
var_dump(is_int($x));

// can use underscore to separate
$x=200_000;
echo $x . '<br>';
?>
