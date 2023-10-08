<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $servername="localhost";
        $username="root";
        $password="";
        $database="spacebuddy";
        
        $conn=mysqli_connect($servername,$username,$password,$database);
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $con_password=$_POST['con_password'];
        $exists=false;
        if($password==$con_password){
        $sql="INSERT INTO `login_database`(`username`, `email`, `password`,`datestamp`) VALUES ('$username','$email','$password',current_timestamp())";
        $result=mysqli_query($conn,$sql);
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="sign.css">
    <link rel="icon" href="http://example.com/favicon.png">
</head>

<body>
    <div id="outerbox">
        <div class="login">
            <h1>Sign up Here</h1>
            <hr>
            <form action="sign.php" method="post" id="contactForm">
                <div class="alert">Your message sent</div>
                <div class="inputBox">
                    <input type="text" id="username" placeholder="Enter Username" name="username" />
                </div>
                <div class="inputBox">
                    <input type="email" id="email" placeholder="Enter Email" name="email" />
                </div>
                <div class="inputBox">
                    <input type="password" id="password" placeholder="Password" name="password"/>
                </div>
                <div class="inputBox">
                    <input type="password" id="con_password" placeholder="Confirm Password" name="con_password"/>
                </div>
                <div class="btn_box submitbtn">
                    <button type="submit">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
        <div class="signup">
            Click here to go back to <a href="login.php">Login</a>
        </div>
    </div>
</body>

</html>