<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration | Page</title>

    <!-- JS -->
    <script src="jquery/jquery-3.6.0.js"></script>
    <script src="js/main.js"></script>

    <!--I didn't used SVG (scalable vector Graphics) icons in this project.  -->
    <!-- I USED FONT ICON IN THIS PROJECT AS SAID BY "GUVI" -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<!-- this is a signup page-->

<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" autofocus name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password1" id="password1" placeholder="Password" minlength="6" />
                            </div>
                            <div class="form-group">
                                <label for="repassword"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="repassword" id="repassword" placeholder="Repeat your password" minlength="6" />
                            </div>
                            <div class="form-group">
                                <label for="DOB"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="date" name="DOB" id="DOB" />
                            </div>
                            <div class="form-group">
                                <label for="age"><i class="zmdi zmdi-male"></i></label>
                                <input type="text" name="age" id="age" placeholder="Enter your Age" />
                            </div>
                            <div class="form-group">
                                <label for="contactno"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="contactno" id="contactno" placeholder="Enter your Contact no." />
                            </div>
                            <div class="form-group">
                                <label for="country"><i class="zmdi zmdi-globe"></i></i></label>
                                <input type="text" name="country" id="country" placeholder="country" />
                            </div>
                            <div class="form-group">
                                <label for="state"><i class="zmdi zmdi-gps-dot"></i></label>
                                <input type="text" name="state" id="state" placeholder="state" />
                            </div>
                            <div class="form-group">
                                <label for="jobrole"><i class="zmdi zmdi-run"></i></label>
                                <input type="text" name="jobrole" id="jobrole" placeholder="Enter Job Role" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.html" class="signup-image-link">Already Registered? click Here</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    require 'function.php';
    if (isset($_SESSION["id"])) {
        header("Location: profile.php");
    }
    ?>
<script src="jquery/jquery-3.6.0.js"></script>
<script src="js/register.js"></script></body>
</html>