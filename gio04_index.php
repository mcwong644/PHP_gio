<?php
// https://youtu.be/6JtP8xk1U_k?si=grkRCt1Jrv4lkcgn
//constants

$fistName='Gio';

//nl2br (newline to break) only works with ""
$fistName="Joe\n";

echo nl2br($fistName);
// runtime define
define('STATUS_PAID','paid');
echo STATUS_PAID;
echo '<br>';
//compile time define therefore cannot use in loops and if-then
const STATUS_PAID2='PAID2';
echo STATUS_PAID2;
echo '<br>';

// can also define as below using variables but vscode will throw error
$paid='PAID3';
define('STATUS_' . $paid, $paid);
echo STATUS_PAID3;
echo '<br><br>';
//predefined constants
echo '<u>Predefined constants</u> <br>';
echo 'PHP Version : ' . PHP_VERSION;
echo '<br><br>';
//magic constants (values can change)
echo '<u>Magic constants</u>';
echo '<br>';
echo 'file : ' . __FILE__ . '<br>';
echo 'line# : ' . __LINE__;
echo '<br><br>';

// Variable Variables
echo '<u>Variable Variables</u> <br>';
$foo = 'bar';
$$foo = 'baz';

echo '$foo = ' . $foo . ' and $bar =  '.$bar . '<br>';
echo "\$foo = $foo, \$\$foo = {$$foo} <br>";
echo "\$foo = $foo, \$\$foo = ${$foo} <br>"; // ${foo} & ${$foo} is deprecated
?>