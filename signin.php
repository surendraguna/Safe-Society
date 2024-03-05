<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <script src="./js/script.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./images/logo1.jpg" alt="">
        </div>
        <marquee behavior="scroll" direction="right" scrollamount="20">
            <div class="text">
                <h1>Crime report portal</h1>
                <p>Empowering People with Information Technology</p>
            </div>
        </marquee>
    </header>
    <div class="outer">
        <div class="inner">
            <div class="top">
                <img src="./images/logo.jpg" alt="">
                <p>Sign in</p>
            </div>
            <div class="bottom">
                <form action="" method="">
                    <div class="input-box">
                        <input type="email" id="email" name="email" required>
                        <span>
                            <label class="material-symbols-outlined">
                                mail
                            </label>
                        </span>
                        <label>E-mail</label>         
                    </div>
                    <div class="input-box">
                        <input type="password" id="password" name="password" required>
                        <span>
                            <label class="material-symbols-outlined">
                                lock
                            </label>
                        </span>
                        <label for="">Password</label>
                        <span class="show-password-btn" onclick="togglePasswordVisibility()">
                            <span class="material-symbols-outlined">
                                visibility
                            </span>
                        </span>
                    </div>  
                    <div class="foot">
                        <div class="btn-top">
                            <a href="signup.php" class="btn-sub">Don't have an account ?</a>
                            <input type="submit" class="btn-sub" value="Sign up">
                        </div>
                    </div>     
                </form>
            </div>
        </div>
    </div>
</body>
</html>