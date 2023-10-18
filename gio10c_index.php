<?php
echo '<h1> Lesson 10c Arrays Casting</h1>';
// cast int into array. it will be 1st element
$x=5;
var_dump((array) $x);
$x='hello';
var_dump((array) $x);

//use 
$array=['a'=>1,'b'=>null,'c'=>2];
var_dump(array_key_exists('a',$array));
var_dump(isset($array['a']));
echo '<br>';
echo array_key_first($array);
echo '<br>';
echo array_key_last($array);
echo '<br>';
print_r(array_values($array));

?>
