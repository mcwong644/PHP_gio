<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dk23main.css">
</head>
<body>
<?php
    echo '<h1> Dani Krossing Lesson 23 Update Delete Database From Website</h1>';
    // https://youtu.be/tHKsZdS8Oug?si=NlNkY6nATGewxdAe
    // https://youtu.be/9Mkd4ig3yjE?si=RdMe-moen-t-5axD lesson 23
?>    
    <h3>Change account</h3>
    <form class="my-form" action="includes/dk23userupdate.inc.php" method="post">
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
        <button class="button">Update</button>
    </form>
    <h3>Delete account</h3>
    <form class="my-form" action="includes/dk23userdelete.inc.php" method="post">
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
        <button class="button">Delete</button>
    </form>
    
</body>
</html>