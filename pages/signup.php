<?php
$user= 0;
$success =0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $email =$_POST['email'];
    $password =$_POST['password'];

    $sql ="select * from `registration` where email ='$email'";
    $result = mysqli_query($connection, $sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            $user =1;
        }else{
            $sql ="insert into `registration` (email, password) values('$email', '$password')";
            $result = mysqli_query($connection ,$sql);
            if($result){
                $success =1;
            } else{
                 die(mysqli_error($connection));
            }
        }
    }

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up page</title>
    <link rel="stylesheet" href="../assets/css/signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php

    if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations</strong> You have registered successfully
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    }
    if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> This email has already been registered
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

    ?>
    <section>
        <div class="image-div">
            <img src="../assets/img/login-page.jpg" alt="">
        </div>
        <div class="content">
            <div class="form-div">
                <h2>Get Started</h2>
                <form action="signup.php" method="post">
                    <div class="input-div">
                        <span>Email</span>
                        <input type="text" placeholder="input email address" name="email" id="">
                    </div>

                    <div class="input-div">
                        <span>password</span>
                        <input type="password" placeholder="input password" name="password" id="">
                    </div>

                    <!-- <div class="input-div">
                        <span>confirm password</span>
                        <input type="password" placeholder="confirm your password" name="" id="">
                    </div> -->

                    <div class="remember">
                        <label for=""><input type="checkbox">Remember me</label>

                    </div>

                    <div class="input-div">
                        
                        <input type="submit" value="Sign-in" name="" id="">
                    </div>

                    <div class="input-div">
                        <span>Already have an account? <a href="login.php">Login</a></span>
                    </div>

                    <!-- <h3>Get started with countimer and let us help you manage your time efficiently </h3> -->
                </form>
            </div>
        </div>
    </section>
</body>
</html>