<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="./loginstyle.css" type="text/css" />
</head>
<body>
    
    <div class="container">
        <div class="dotbox" id="dotbox">
            <span class="dot"></span>
        </div>

        <div class="">
            <h1 class="">Login With Us</h1>
            <form action="loginfunction.php" method="post" class="" id="form">
                <div class="form-group">
                    <label for="email">Security :</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email..." />
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password..." />
                </div>

                <div class="d-flex">
                    <button type="submit" name="submit" id="submit" class="btn">Login</button>
                </div>
            </form>

            <p>You don't have account ? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>

    <script src="./app.js"></script>
</body>
</html>