<!DOCTYPE html>
<!-- https://youtu.be/bOqTCDfc7Tk?si=LLT6Zh9TeeXeCmEX -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dk06reset.css">
    <link rel="stylesheet" href="dk06main.css">
</head>
<body>
    <main>
        <form action="dk06formhandler.php" method="post">
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" name="lastname" placeholder="Lastname...">

            <label for="favpet">Favorite Pet</label>
                <select name="favpet" id="favpet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>
</html>