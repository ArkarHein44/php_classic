<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Form</title>
    <link rel="stylesheet" href="./loginstyle.css" type="text/css">
</head>
<body>
    <div class="container">

        <div class="dotbox" id="dotbox">
            <span class="dot"></span>
        </div>

        <div class="formcontainer">
            <h1>Login with us</h1>
            <!-- php  mr tot ./ start here ma py tr po kg tl  -->
            <form id="form" action="loginfucntion.php" method="post">

                <div class="form-group">
                    <label for="email">Security : </label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="type email" />
                    <input type="password" name="password" id="password" class="form-control" placeholder="type password">
                </div>

                <div class="d-flex">
                    <button type="submit" name="submit" id="submit" class="btn">Submit</button>
                </div> 
            </form>

            <p>You dont't have account? <a href="signup.php" >Signup here!!</a> </p>
        </div>

    </div>
    <script src="./app.js" type="text/javascript"></script>
</body>
</html>