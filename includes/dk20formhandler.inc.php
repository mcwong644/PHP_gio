<?php

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $username=$_POST['username'];
    $pwd=$_POST['pwd'];
    $email=$_POST['email'];
    // no need to sanitize with htmlspecialchars() becoz not output to browser yet

    try {
        require_once("dk20dbh.inc.php");
        // using named parameters not so safe
        // need semi-colon in string becoz it's SQL statement
        // $query = "INSERT INTO users (username, pwd, email) VALUES($username,$pwd,$email);"; 

        // using ? non named parameters is safer
        // need semi-colon in string becoz it's SQL statement
        // $query = "INSERT INTO users (username, pwd, email) VALUES(?, ?, ?);"; 
        // $stmt = $pdo->prepare($query);
        // $stmt->execute([$username,$pwd,$email]);

        // another method named parameters also
        $query = "INSERT INTO users (username, pwd, email) VALUES(:username, :pwd, :email);"; 
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":pwd",$pwd);
        $stmt->bindParam(":email",$email);

        $stmt->execute();
        //close & free up
        $pdo=null;
        $stmt=null;

        // go back to the front page
        header("Location: ../dk20_index.php");
        die(); // or use exit()
    } catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());

    }
} else {
    header("Location: ../dk20_index.php");
}