<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dk20mainb.css">
</head>
<body>
<?php
    echo '<h1> Dani Krossing Lesson 20 Connect to a Database From Website</h1>';
    // https://youtu.be/tHKsZdS8Oug?si=NlNkY6nATGewxdAe
?>    
    <h3>Signup</h3>
    <form class="my-form" action="includes/dk20formhandler.inc.php" method="post">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="pwd">Password :</label>
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="email">E-Mail    :</label>
            <input type="text" name="email" placeholder="E-Mail">
        </div>
        <button class="button">Signup</button>
    </form>

    
</body>
</html>