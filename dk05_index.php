<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo '<h1> Dani Krossing Lesson 5 Super Globals</h1>';
        // https://www.youtube.com/live/6EukZDFE_Zg?si=nMCY9oX9eBaxVVUv
        // super globals
        echo "\$_SERVER['DOCUMENT_ROOT'] = " . $_SERVER['DOCUMENT_ROOT'];
        echo '<br>';
        echo "\$_SERVER['PHP_SELF'] = " . $_SERVER['PHP_SELF'];
        echo '<br>';
        echo "\$_SERVER['SERVER_NAME'] = ".$_SERVER['SERVER_NAME'];
        echo '<br>';
        echo "\$_SERVER['REQUEST_METHOD'] = ".$_SERVER['REQUEST_METHOD'];
        echo '<br>';
        echo "\$_GET['name'] = ".$_GET['name']; //http://localhost/program%20gio/dk05_index.php?name=wong
        echo '<br>';
        echo "\$_GET['eyecolor'] = ".$_GET['eyecolor']; //http://localhost/program%20gio/dk05_index.php?name=wong&eyecolor=blue
        echo '<br>';
        // echo "\$_POST['fname'] = ".$_GET['fname']; // refer Next lesson part06
        echo '<br>';
        echo "\$_REQUEST['name'] = ".$_GET['name']; //http://localhost/program%20gio/dk05_index.php?name=wong&eyecolor=blue
        echo '<br>';
        echo "\$_GET['eyecolor'] = ". htmlspecialchars($_GET['eyecolor']); //http://localhost/program%20gio/dk05_index.php?name=wong&eyecolor=blue
        echo '<br>';
        // echo "\$_FILES['filename'] = ". $_FILES['filename']; // uploaded files, refer future lessons
        echo '<br>';
        $_SESSION["username"] = "krossing";
        echo "\$_SESSION[\"username\"] = ".$_SESSION["username"];
        echo '<br>';
        // getenv("HOME");
        // echo $_ENV["HOME"]; // refer future lessons
    ?>

</body>
</html>

