<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="logo">
        <img src="Photos/logo01.png" alt="logo">
        <span class="logo-text">QuickTow</span>
    </div>


    <div class="login-wrapper">
        <form action="SignIn.php" method="post">
            <h2>Login</h2>
            <div class="inputField">
                <input type="text" name="username" required placeholder="">
                <label>Enter your username</label>
            </div>
            <div class="inputField">
                <input type="password" name="passWord" required placeholder="">
                <label>Enter your password</label>
            </div>
            <div class="options">
                <label for="remember">
                    <input type="checkbox" id="remember" name="remember">
                    <p>Remember me</p>
                </label>
                <a href="#" style="color: rgba(255, 255, 255, 0.45);">Forgot password</a>
            </div>
            <button type="submit" name="login">Log In</button>
            <br>
            <div class="accountOptions">
                <p>Don't have an account? <a href="SignUp.html" style="color: rgba(255, 255, 255, 0.25);">Register</a>
                </p>

            </div>
        </form>
    </div>

</body>

</html>