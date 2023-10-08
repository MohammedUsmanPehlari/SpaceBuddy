<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planet Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
</head>
<style>
    body {
        color: white;
        /* object-fit: cover; */
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        /* overflow: hidden; */
    }

    .mercurymain {
        display: flex;
        /* border: 3px solid white; */
        margin: 47px 21px;
        padding: 25px;
        /* background: url(images/Data_security_12.jpg) no-repeat center center/cover; */
        font-family: cursive;
        border-radius: 20px;
        text-align: justify;
        /* text-size-adjust: auto; */
    }

    #mercury {
        text-align: center;
        font-weight: bold;
        margin: 83px;
        margin-top: 50px;
        margin-bottom: -49px;
        padding: 5px;
    }

    .mercurysection {
        margin-top: 100px;
        border: 2px solid white;
        border-radius: 25px;
   
    }
    #box{
        background: rgba(0,0,0,0);
        backdrop-filter: blur(10px);
    }
    body {
    font-family: Arial, Helvetica, sans-serif;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    justify-items: center;
    margin: 0;
    padding: 0;
}

video {
    z-index: -1;
    position: fixed;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
}


/* Navbar */
#secnav {
    font-weight: bolder;
    z-index: 50;
}

#navbar {
    display: flex;
    align-items: center;
    width: 100%;
    z-index: 1000;
    background: transparent;
    backdrop-filter: blur(50px);
    position: fixed;
    justify-content: space-between;
}

#navbar::before {
    content: "";
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(20px);
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: -1;
}

#navbar ul {
    list-style-type: none;
    display: flex;
    align-items: center;
    padding: 0;
    
}

#navbar ul li {
    position: relative;
}

.dropdown_menu li {
    width: 100%;
    
}

#navbar ul li a {
    margin: 30px;
    font-size: 18px;
    text-decoration: none;

    color: white;    transition: 0.5s;
    font-size: 20px;
}


.active,
#navbar ul li :hover {
    color: aqua;
}



#logo {
    margin: 8px;
    height: 50px;
}

#logo img {
    height: 50px;
    object-fit: cover;
    border-radius: 5px;
}

.list {
    margin: 8px;
    padding: 10px;
}

.dropdown_menu {
    display: none;
    color: white;
    position: absolute;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(20px);
    top: 100%;
    left: 0;
    
}

.dropdown_menu a {
    margin-right: 10px;
}

.list ul li:hover .dropdown_menu {
    display: block;
    
    background: gray;
    opacity: 0.8;
}

.dropdown_menu li {
    width: 100%;
}

.dropdown_menu ul {
    margin-top: 10px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
}

.dropdown_menu ul li {
    margin-top: 20px;
}

.fas {
    float: right;
    margin-left: 10px;
    padding-top: 3px;
}

.dropdown_menu_child {
    display: none;
    position: absolute;
    top: 0;
    left: 132px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(20px);
    z-index: inherit;
    width: 150px;
    background: gray;
    color: white;
    opacity: 0.9;
}


.dropdown_menu_child ul li {
    margin: 0;
    margin-bottom: 20px;
}

.dropdown_menu ul li:hover .dropdown_menu_child {
    display: block;
}
    

#inquire {
    margin: 8px;
    padding: 10px;
}
.btn-div{
    position: relative;
    display: flex;
    margin-top: 20px; 
    justify-content: center;
    align-items:center;
}
.btn-space{
    width: 20%;
    color: white;
}
.btn-div a{
    color: white;
    text-decoration: none;
}
</style>
 <body>
  <?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="spacebuddy";
 
 $conn=mysqli_connect($servername,$username,$password,$database);
 echo '<nav id="navbar">
 <div id="logo">
     <img src="images/spacebuddy-removebg-preview.png" alt="logo">
 </div>
 <div class="list">
     <ul>
         <li class="item"><a href="home.php">Home</a></li>
         <li class="item"><a href="home.php">Inbox</a></li>
         <li class="item pad"><a href="#" style="margin-right: 10px;">Category<i
                     class="fas fa-caret-down"></i></a>
             <div class="dropdown_menu">
                 <ul>
                     <li><a href="">Mercury</i></a>
                         <div class="dropdown_menu_child">
                             <ul>
                                 <li><a href="#">Caloris Basin</a></li>
                                 <li><a href="#">Hollows Of Mercury</a></li>
                                 <li><a href="#">Water Ice Deposits</a></li>
                             </ul>
                         </div>
                     </li>
                     <li><a href="">Venus</a>
                         <div class="dropdown_menu_child">
                             <ul>
                                 <li><a href="#">Highland Plateaus</a></li>
                                 <li><a href="#">Tesserae Terrain</a></li>
                                 <li><a href="#">Venusian Volcanoes</a></li>
                             </ul>
                         </div>
                     </li>
                     <li><a href="">Earth</a>
                         <div class="dropdown_menu_child">
                             <ul>
                                 <li><a href="#">Great Barrier Reef</a></li>
                                 <li><a href="#">Machu Picchu</a></li>
                                 <li><a href="#">Antelope Canyon</a></li>
                             </ul>
                         </div>
                     </li>
                     <li><a href="">Mars</a>
                         <div class="dropdown_menu_child">
                             <ul>
                                 <li><a href="#">Olympus Mons</a></li>
                                 <li><a href="#">Valles Marineris</a></li>
                                 <li><a href="#">The North and South Poles</a></li>
                             </ul>
                         </div>
                     </li>
                     <li><a href="">Jupiter</a>
                         <div class="dropdown_menu_child">
                             <ul>
                                 <li><a href="#">Great Red Spot</a></li>
                                 <li><a href="#">Jupiters Moons</a></li>
                                 <li><a href="#">Jupiters Rings</a></li>
                             </ul>
                         </div>
                     </li>
                     <li><a href="">Saturn</a>
                         <div class="dropdown_menu_child">
                             <ul>
                                 <li><a href="#">Saturns Rings</a></li>
                                 <li><a href="#">Titan</a></li>
                                 <li><a href="#">Enceladus</a></li>
                             </ul>
                         </div>
                     </li>
                     <li><a href="">Uranus</a>
                         <div class="dropdown_menu_child">
                             <ul>
                                 <li><a href="#">Miranda</a></li>
                                 <li><a href="#">Ariel</a></li>
                                 <li><a href="#">Uranus Rings</a></li>
                             </ul>
                         </div>
                     </li>
                     <li><a href="">Neptune</a>
                         <div class="dropdown_menu_child">
                             <ul>
                                 <li><a href="#">Triton</a></li>
                                 <li><a href="#">Neptunes Rings</a></li>
                                 <li><a href="#">Neptunes Atmosphere</a></li>
                             </ul>
                         </div>
                     </li>
                 </ul>
             </div>
         </li>
         <li class="item"><a href="about.php">About us</a></li>
         <li class="item"><a href="#">Contact us</a></li>
     </ul>
 </div>
</nav>
</section>';
?>
<br>
<?php
$id=$_GET['catid'];
$sql="SELECT * FROM `threadlist` WHERE `thread_id`='$id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $thread_name=$row['thread_name'];
    $thread_description=$row['thread_description'];
    $thread_id=$row['thread_id'];
    $threadcat_id=$row['threadcat_id'];
}
    echo '
    <video src="videos/'. $threadcat_id.'.mp4" autoplay muted loop></video>
    <div class="mercurysection container">
    <h1 id="mercury">'. $thread_name.'</h1>
    <br>
    <br>
    <br>
    <hr>
    <div class="mercurymain" id="planet">

   <p>
   '. $thread_description.'...
</p>
</div>
</div>
<div class="btn-div"><button type="button" class="btn btn-success btn-space"><a href="booking.php"'.$thread_id.'">Book Ticket Now</button></div>';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>