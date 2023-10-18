<?php
echo '<h1> Lesson 10b Associative Arrays</h1>';

$programLanguages= [
    'php'=> 'ver8.2.0',
    'python'=> 'ver 3.9'
];

echo '<pre>';
print_r($programLanguages);
echo '</pre>';
echo "programLanguages[\'python\'] is {$programLanguages['python']} ";

// add elements
$programLanguages['Pascal']= 'ver 9.9';
// use var
$new='Basic';
$programLanguages[$new]= 'ver MS basic 1.0';


echo '<pre>';
print_r($programLanguages);
echo '</pre>';

//stop 8:04
echo '<h3> multi dimension arrays</h3> <br>';
$programLanguages2= [
    'php'=> [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website'=> 'www.php.net',
        'isOpensource'=> true,
        'versions' => [
            ['version'=> 8,'releaseDate'=>'Nov 26,2020'],
            ['version'=> 7.4,'releaseDate'=>'Nov 20,2019'],
        ],
    ],
    'python'=> [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website'=> 'www.python.org',
        'isOpensource'=> true,
        'versions' =>[
            ['version'=> 3.9,'releaseDate'=>'Oct 5,2020'],
            ['version'=> 3.8,'releaseDate'=>'Oct 14,2019'],
        ],
    ],   
];
echo '<pre>';
print_r($programLanguages2);
echo '</pre>';

echo $programLanguages2['php']['website'];
echo '<br>';
// echo $programLanguages2['php']['versions'][0];
echo $programLanguages2['php']['versions'][0]['releaseDate'];
echo '<br>';
$array=[true=>'a',1=>'b','1'=>'c',1.8=>'d',null=>'e']; // true=1='1'=1.8='d'. null is empty string key
print_r($array);
echo '<br>';
echo $array['']; // access empty string element
echo '<br>';
echo $array[null]; // access null is same as empty string
echo '<br>';

$array= ['a','b',50=>'c','d','elephant'=>'e','f','g','h']; //auto assign keys 51, 52,...
echo '<pre>';
print_r($array);
echo '</pre>';
// remove last element
echo array_pop($array);
echo '<br>';
print_r($array);
echo '<br>';

// remove 1st element
echo array_shift($array);
echo '<br>';
print_r($array);
echo '<br>';
// use unset to remove element. no reindexing
unset($array['elephant'],$array[1]);
print_r($array);

?>