<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $servername="localhost";
        $username="root";
        $password="";
        $database="spacebuddy";
        
        $conn=mysqli_connect($servername,$username,$password,$database);
        $username1=$_POST['username'];
        $password=$_POST['password'];
        $sql="Select * from login_database where username='$username1' AND password='$password'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num == 1){
            $login=true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username1;
            header("location: http://localhost/spaceBuddy/");
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/x-icon" href="images/spacebuddy-removebg-preview.png">

</head>

<body>
    <video src="images/asteroids_-_9135 (720p).mp4" autoplay muted loop></video>
    <section id="secnav">
        <nav id="navbar">
            <div id="logo">
                <img src="images/spacebuddy-removebg-preview.png" alt="logo">
            </div>
            <div id="list">
                <ul>
                    <li class="item"><a href="#">Home</a></li>
                    <li class="item"><a href="#">Social</a></li>
                    <li class="item"><a href="#">Category</a></li>
                    <li class="item"><a href="#">About us</a></li>
                    <li class="item"><a href="#">India</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="loginpage">
        <div id="outerbox">
            <div class="login">
                <h1>Login Here</h1>
                <form action="login.php" method="post" id="contactForm">
                    <div class="alert">Your message sent</div>
                    <div class="inputBox">
                        <input type="text" id="username" name="username" placeholder="Username" />
                    </div>
                    <div class="inputBox">
                        <input type="password" id="password" name="password" placeholder="Password" />
                    </div>
                    <div class="btn_box submitbtn">
                        <button type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="signup">
                Dont have an account? <a href="sign.php">SignUp</a>
            </div>
        </div>
    </section>

</body>

</html>
