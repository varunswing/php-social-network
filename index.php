<?php

    require 'core.php';
    require 'connect.php';

    if(loggedin()){
        $firstname = getuserfield('firstname', $mysql_connect);
        $surname = getuserfield('surname', $mysql_connect);

        echo 'You\'re logged in, '.$firstname.' '.$surname;
        echo '.<br>Now you can <a href="homepage.php">Post</a> your views.<br>';
        
    }else{
        include 'login.php';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <br><a href = "logout.php">logout</a>

</body>
</html>
