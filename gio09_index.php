<?php
echo '<h1> Lesson 9 Null</h1>';
// null

// null constant
$x = null;

echo 'null $x =' . $x . '<br>';
var_dump($x);
echo '<br>';
echo is_null($x);
echo '<br>';
var_dump(is_null($x));
echo '<br>';
echo '$x === null : ' . ($x===null);
echo '<br>';
var_dump($x === null);
echo '<br>';
var_dump(isset($y));
echo '<br>';
var_dump(isset($x));
$x = 123;
echo '<br>';
echo 'isset($x) : ' . (isset($x));
echo '<br>';
echo 'isset($y) : ' . (isset($y));
unset($x);
var_dump($x);

// casting
$x =null;
var_dump((string) $x); // cast to string
var_dump((int) $x); // cast to int
var_dump((array) $x);

?>