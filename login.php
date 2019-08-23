<?php

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = mysqli_real_escape_string ($mysql_connect, $_POST['username']);
        $password = mysqli_real_escape_string ($mysql_connect, $_POST['password']);

        $password_hash =  mysqli_real_escape_string ($mysql_connect, md5($password));

        if(!empty($username) && !empty($password)){
            $query = "SELECT id FROM users WHERE username ='$username' AND password = '$password' "; 
            if($query_run = mysqli_query($mysql_connect, $query)){
                $query_num_rows = mysqli_num_rows($query_run);

                if($query_num_rows == 0){
                    echo 'Invalid username/password combination.';
                }else if($query_num_rows == 1){
                    $row = mysqli_fetch_assoc($query_run);
                    $_SESSION['user_id'] = $row['id'];
                    header ('Location: index.php');
                }
            }
        
        }else{
            echo 'You must supply a username and password.';
        }
    }

?>

<form action="<?php echo $current_file; ?>" method="POST">
<h1 style="text-align:center;" >Login Page</h1>
<p style="text-align:left;"> Username:<input type="text" placeholder="Username..." name="username"> </p>
<p style="text-align:left;">Passowrd: <input type="password" placeholder="Password..." name="password"><br><br>
<p style="text-align:left;"><input type="submit" value="Log in">
<h6 style="text-align:left;">Didn't have an account</h6>
<h6 style="text-align:left;"><a href="register.php" style="text-decoration:none;">Create new account </a></h6>
</form>
