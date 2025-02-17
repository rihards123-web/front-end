<?php
include ('nav-bar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign-up.css">
    <title>Document</title>
</head>
<body>
    <section class="container"> 
    <div class="signin-container">
        <div class="header">
            <h2>Sign Up</h2>
            <h4>Create an account or <a href="#">Sign in</a></h4> 
        </div>
        <div class="form-container">
            <label for="email">Email</label>
            <input type="email" id="email">
            <label for="username">Username</label>
            <input type="username" name="" id="username">
            <label for="password">Password</label>
            <input type="password" id="password">
        </div>
        <div class="signin-button">
            <button>Sign up</button>
        </div>
    </div>
    </section>
</body>
</html>