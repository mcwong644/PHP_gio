<?php
echo '<h1> Part 06-Strings & String functions</h1>';
// https://youtu.be/HTEP3LC0ppk?si=AkwGh_sDQT0-UaKr

//concat strings

// string functions

// multi line strings
$string = "    Hello World      ";

// PHP_EOL = The correct 'End Of Line' symbol for this platform. browser view source
echo "0 - \$string = '$string'" .  '<br>' . PHP_EOL;
echo "1 - strlen()  " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - trim() " . trim($string) . '<br>' . PHP_EOL;
echo "3 - ltrim() " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - rtrim() " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - str_word_count " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - strrev() " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - strtoupper() " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - strtolower() " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - ucfirst() " . ucfirst($string) . '<br>' . PHP_EOL;
echo "10 - lcfirst() " . lcfirst($string) . '<br>' . PHP_EOL;
echo "11 - ucwords() " . ucwords($string) . '<br>' . PHP_EOL;
echo "12 - strpos() " . strpos($string,'world') . '<br>' . PHP_EOL;
echo "13 - stripos() " . stripos($string,'world') . '<br>' . PHP_EOL;
echo "14 - substr(\$str,8) " . substr($string,8) . '<br>' . PHP_EOL;
echo "14b - substr(\$str,8,3) " . substr($string,8,3) . '<br>' . PHP_EOL;
echo "15 - str_replace() " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - str_ireplace() " . str_ireplace('World', 'PHP', $string) . '<br>' . PHP_EOL;

$num1 = 100;
$num2 = 123456;

echo str_pad($num1, 8, '0',STR_PAD_LEFT) . '<br>';
echo str_pad($num1, 8, 'x',STR_PAD_RIGHT) . '<br>';
echo str_repeat('world', 3) . '<br>';

//multiline
$longtext = "
    Hello, my name is Zura
    I am 27,
    I love my cats
";
echo $longtext . '<br>';
echo nl2br($longtext) . '<br>';

$longtext = "
    Hello, my name is <b>Zura</b>
    I am <b>27</b>,
    I love my cats
";
echo "1 - str " . $longtext . '<br>';
echo "2 - nl2br(str) " . nl2br($longtext) . '<br>';
echo "3 - htmlentities(str) " . htmlentities($longtext) . '<br>';
echo "4 - nl2br(htmlentities(str)) " . nl2br(htmlentities($longtext)) . '<br>';
echo "5 - html_entity_decode(htmlentities(str)) " . html_entity_decode(htmlentities( $longtext)) . '<br>';
echo "6 - htmlspecialchars(str) " . htmlspecialchars($longtext) . '<br>';
?>