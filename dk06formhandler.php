<?php
// pure php file, no need to close 
// https://youtu.be/bOqTCDfc7Tk?si=LLT6Zh9TeeXeCmEX
// var_dump($_SERVER['REQUEST_METHOD']);

/* another way
if(isset($_POST['submit'])) {

}
*/

if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = htmlspecialchars($_POST['firstname']);
    $lname = htmlspecialchars($_POST['lastname']);
    $favpet = htmlspecialchars($_POST['favpet']);
    // can als use htmlentities($_POST['favpet'])
    
    // validation
    if(empty($fname) || empty($lname) || empty($favpet)) {
        
        header('location: dk06_index.php');
        exit();
    }
    echo "Data submitted are firstname: $fname, lastname: $lname, and pet: $favpet";
    // sleep(3);
    
    // comment below line to view the data submitted
    header('location: dk06_index.php');
} else {
    header('location: dk06_index.php');
}

