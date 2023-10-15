<?php
echo '<h1> Lesson 8 Strings Heredoc Nowdoc</h1>';
// Strings

$firstName = 'Will'; 
//nl2br is newline to break function
$lastName= "{$firstName} Smith";
echo '<br>'; // "" can substitute variables. ${firstName} deprecated
$name = 'William Smith';
echo $lastName;

echo '$lastName[1] = ' . $lastName[1]. '<br>';
echo '$name[-2] = ' . $name[-2]. '<br>'; 
echo '$name[-3] = ' . $name[-3] . '<br>';
echo '$lastName[-4] = ' . $lastName[-4] . '<br>';
var_dump($name);
$name[15] = 'Z';
echo '<br>';
var_dump($name);
echo '<br>';

// heredoc
$x=1;
$y=2;
$here = <<<HDOC
<h3>Heredoc....variable can be substituted</h3>
Line $x
Line $y

Line 3
HDOC; //terminate

echo nl2br($here);

// newdoc
$x=1;
$y=2;
// use single quote, no variables subsitution
$here = <<<'TEXT'
<h3>Nowdoc...var cannot be substituted</h3>
Line $x
Line $y

Line 3
TEXT; //terminate

echo nl2br($here);



?>