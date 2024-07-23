<?php include('server.php')?>
<html>
    <head>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
    </head>
    <body>
        <div class="wrapper ">
            <span class="bg-animation"></span>
            <span class="bg-animation2"></span>
            <div class="form-box login">
                <h2 class="animation" style="--i:0;">Login</h2>
                <form method="post" action="server.php">
                    <div class="input-box animation" style="--i:1;">
                    <input type="text" required name="username">
                        <label>Username</label>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box animation" style="--i:2;">
                    <input type="password" required name="password">
                        <label>Password</label>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <button type="submit" class="btn animation" style="--i:3;" name="login">Login</button>
                    <div class="logreg-link animation" style="--i:4;">
                        <p>Don't have an account? <a href="#" class="reg">Sign Up</a></p>
                    </div>
                </form>
            </div>
            <div class="info-text login">
                <h2 class="animation" style="--i:0;">Welcome Back !</h2><br>
                <p class="animation" style="--i:1;">Staying healthy <br>just got simpler. <br>Create a Patient<br> Online account.</p>
            </div> 
            <div class="form-box register">
                <h2 class="animation" style="--i:17;">Sign Up</h2>
                <form method="post" action="server.php">
                    <div class="input-box animation" style="--i:18;">
                    <input type="text" required name="username">
                        <label>Username</label>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box animation" style="--i:19;">
                        <input type="email" required name="email">
                        <label>Email</label>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="input-box animation" style="--i:20;">
                        <input type="password" required name="password">
                        <label>Password</label>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <button type="submit" class="btn animation" style="--i:21;" name="register">Sign Up</button>
                    <div class="logreg-link animation" style="--i:22;">
                        <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
                    <div class="info-text register">
                        <h2 class="animation" style="--i:17; --j:0;">Welcome Back !</h2><br>
                        <p class="animation" style="--i:18; --j:1;">Staying healthy <br>just got simpler. <br>Create a Patient<br> Online account.</p>
                    </div>
        </div>
    <script type="text/javascript" src="log.js"></script>
    </body>
</html>