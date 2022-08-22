<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | page</title>
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <script src="script.js"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Sign in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="register.php" class="signup-image-link">Not Registered ? Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <form method="POST">
                        <input type="hidden" id="decide" value="login">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" autofocus name="name" id="name" placeholder="User Name" required />
                        </div>
                        <div class="form-group">
                            <label for="password1"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password1" id="password1" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="Remember-me" />
                            <label for="remember-me" class="label-Remember-me"><span><span></span></span>Remember
                                me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="submit" id="signin" class="form-submit" focus value="Log in" onclick="submitData()" />

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <?php
    require 'function.php';
    if (isset($_SESSION["id"])) {
        header("Location: profile.php");
    }
    ?>
   <script src="jquery/jquery-3.6.0.js"></script>
<script src="js/script.js"></script>
</body>
</html>