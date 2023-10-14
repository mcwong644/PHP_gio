<?php
echo '<h1> Lesson 5 Booleans</h1>';

$isComplete=true; //camel case
// integers 0 -0 = false
// float 0.0 -0.0 = false
// '' =  false
// '0' = false
// [] = false
// null = false

if($isComplete) {
    // do something
    echo 'success';
} else {
    // do
    echo 'fail';
}
echo '<br>';
echo $isComplete;
echo '<br>';
var_dump(is_bool($isComplete));
?>