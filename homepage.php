<?php

    require 'connect.php';
    require 'core.php';

    if(loggedin()){
        if(isset($_POST['title']) && isset($_POST['body'])){

            $title =  mysqli_real_escape_string ($mysql_connect, $_POST['title']);
            $body =  mysqli_real_escape_string ($mysql_connect, $_POST['body']);
            $session = $_SESSION['user_id'];
            
            if(!empty($title) && !empty($body)){
                if(strlen($title)>255 || strlen($body)>1000){
                    echo 'Please ahear to maxlength of fields.';
                }else{
                    $query = "INSERT INTO posts(id, title, body) VALUES('$session', '$title', '$body')";
                    if($query_run=mysqli_query($mysql_connect, $query)){
                        header('Location: post_success.php');
                    }else{
                        echo 'Sorry, we couldn\'t post at this time. Try again Later.';
                    }                    
                }
            }else{    
                echo 'All fields are required.';
            }
        }
    }else{
        echo 'Please log in first.';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
    <title>Document</title>
    <h1 style="text-align:center;">Home Page</h1>
     <style type="text/css">
        body {background-color:lawngreen;}
    </style>
</head>
<body>

<form action="homepage.php" method="POST">
    Title:<br><textarea name="title" id="" cols="10" rows="1" placeholder="Title..." maxlength="255"></textarea><br><br>
    Post:<br><textarea name="body" id="" cols="25" rows="10" placeholder="Content of your post..." maxlength="1000"></textarea>
    <input type="file" value="Post"><br><br>
    <input type="submit" value="Post">
</form>
    
</body>
</html>

