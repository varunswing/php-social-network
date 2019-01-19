<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo("Name: ".$_POST['name']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>
    <form action="register.php" method="post">
        <input type="text" name="name" placeholder="Your Name">
        <input type="text" placeholder="Username...">
        <input type="text" placeholder="Password...">
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>