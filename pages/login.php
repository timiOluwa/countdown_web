

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/alert.css">
    <script src="<?php echo $website_url?>/js/jquery-v3.6.1.min.js"></script>
    <script src="<?php echo $website_url?>/js/aos.js"></script> 
    <script src="<?php echo $website_url?>/js/script.js"></script> 
</head>
<body>
<?php include 'alert.php'?>
    <section>
        <div class="image-div">
            <img src="../assets/img/login-page.jpg" alt="">
        </div>
        <div class="content">
            <div class="form-div">
                <h2>Login</h2>
                <form action="login.php"  method="post">              
                    <div class="input-div">
                        <span>Email</span>
                        <input type="text" name="email" placeholder="Countdownweb@gmail.com">
                    </div>

                    <div class="input-div">
                        <span>password </span>
                        <input type="text" placeholder="input password" name="password" id="">
                    </div>

                    <div class="remember">

                        <label for=""><input type="checkbox">Remember me</label>

                        <a class="fw-bold text-decoration-none mx-4" href="forgot-password.php" >Forgot password</a>

                    </div>

                    <div class="input-div">
                        
                        <button class="signin-button" id="login_btn" onclick="_sign_in()" >Login</button>
                    </div>

                    <div class="input-div">
                        <span>Don't have an account <a href="signup.php">Sign-up</a></span>
                    </div>

                    <!-- <h3>Get started with countimer and let us help you manage your time efficiently </h3>  -->
                </form>
            </div>
        </div>
    </section>
    <script>
        superplaceholder({el: email,
            sentences: ['Enter Your Email Address', 'e.g afootechglobal@gmail.com','e.g adekoyasegun200@gmail.com', 'info@webtesting.com'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
    </script>
      <script src="/js/learn.js"></script>
    <script src="/js/superplaceholder.js"></script>
</body>
</html>