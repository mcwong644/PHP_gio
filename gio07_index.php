<?php
echo '<h1> Lesson 7 Floats</h1>';
$x = 13.5;
$y = 10.0e2;

echo $x . '<br>';
echo $y . '<br>';
var_dump($y);
echo '<br>';
// printf("%f",$y);
printf(nl2br("%0.2f\n"),$y);
echo 'Version= ' . PHP_VERSION . '<br>';
echo 'Float max = ' . PHP_FLOAT_MAX . '<br>';
$x = ceil((0.1 + 0.7) * 10);
echo $x . '<br>';

$x = floor((0.1 + 0.7) * 10);
echo $x . '<br>';

$x = ceil((0.1 + 0.2) * 10); // = 0.3333 * 10 = 3.3333 therefore ceil = 4
echo $x . '<br>';

$x = 0.3;
$y = 1 - 0.77;
var_dump($x, $y);
echo '<br>';

if($x==$y) {
    echo 'Yes';
} else {
    echo 'No';
}

echo INF;
echo NAN;
echo '<br>';
$x=PHP_FLOAT_MAX * 2;
var_dump(is_infinite($x));
var_dump(is_finite($x));
var_dump(is_nan($x));
$x=5;
var_dump(floatval($x)); // force to float (casting) or (float) $x

?>