<?php
echo '<h1> Lesson 10 Arrays</h1>';

$programLanguage=['PHP','Java','Python'];

echo '<pre>';
var_dump($programLanguage);
echo '</pre>';
// different from strings - arrays cannot use negative eg array[-1]
echo $programLanguage[1];
echo '<br>';

// push element to end of array
$programLanguage[]='C++';
array_push($programLanguage, 'Flutter');
echo '<pre>';
var_dump($programLanguage);
echo '</pre>';
var_dump(isset($programLanguage[3]));
$programLanguage[1]='Golang';
echo '<pre>';
var_dump($programLanguage);
echo '</pre>';

print_r($programLanguage);

// count array elements
echo '<br>';
echo count($programLanguage);
echo '<br>';



?>