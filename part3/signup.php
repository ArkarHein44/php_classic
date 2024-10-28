<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="./signupstyle.css" type="text/css" />
</head>
<body>
    
    <div class="container">
        <div class="dotbox" id="dotbox">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <div class="">
            <h1 class="">Login With Us</h1>
            <form action="registerfunction.php" method="post" class="" id="form" enctype="multipart/form-data">

                <div class="page">
                    <div class="form-group">
                        <label for="email">Security :</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email..." />
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password..." />

                        <div class="">
                            <input type="radio" name="newsletter" id="agree" class="form-check-input" value="1" checked/> 
                            <label for="agree" class="form-check-label">I agree to get newsletter.</label>

                            <input type="radio" name="newsletter" id="noagree" class="form-check-input" value="0" checked/> 
                            <label for="noagree" class="form-check-label">I do not agree to get newsletter.</label>
                        </div>
                    </div>
                </div>
                
                <div class="page">
                    <div class="form-group">
                        <label for="firstname">Personal Info :</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter firstname" />
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter lastname" />

                        <div class="">
                           <label for="profile">Proflie Picture</label>
                           <input type="file" name="profile[]" class="form-control" id="profile">
                        </div>
                    </div>
                </div>

                <div class="page">
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="text" class="form-control" name="dob" id="dob" />
                    </div>
                </div>

                <div class="page">
                    <div class="form-group">
                        <label for="phone">Contact Info :</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" />
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Detail Address" />

                        <div class="">
                           <input type="checkbox" name="documents[]" id="docnrc" class="form-check-input" value="nrc" />
                           <label for="docnrc" class="form-check-label">I have NRC</label>

                           <input type="checkbox" name="documents[]" id="docpassport" class="form-check-input" value="passport" />
                           <label for="docpassport" class="form-check-label">I have Passport</label>

                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <button type="button" id="prevbtn" class="btn" onclick="gonow(-1)">Previous</button>
                    <button type="button" id="nextbtn" class="btn" onclick="gonow(1)">Next</button>
                </div>
            </form>

            <p>Already registert? <a href="signup.php">Login here !!!</a></p>
            <div id="result-container">
                <!-- <ul>
                    <li>Name: Aung Kyaw</li>
                    <li>Email  : aungkyaw@gmail.com</li>
                </ul>
                
                <button type="submit" class="submit-btn" onclick="submitbtn()">Apply Now</button> -->
            </div>
        </div>
    </div>

<script src="./app.js"></script>
</body>
</html>