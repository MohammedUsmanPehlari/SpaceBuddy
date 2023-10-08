<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planet Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" href="thread.css">
</head>
<body>
<style>
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
    #secnav {
    font-weight: bolder;
    }

    #navbar {
         display: flex;
        align-items: center;
        position: fixed;
        width: 100%;
         justify-content: space-between; 
         }
         #products {
    margin-top: 30px;
    height: 520px;
    opacity: 0.7;
}

#products h1 {
    color: white;
    text-align: center;
    font-size: 30px;
    /* width: fit-content; */
    /* border-bottom: 2.5px solid rgb(255, 165, 46); */
}

.outerbox {
    display: grid;
    grid-template-columns: repeat(4,auto);
    }

.buttons {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.buttons .but1 {
    text-align: center;
    font-size: 20px;
    margin: 0px 10px;
    border: 2px solid white;
    border-top-left-radius: 50px;
    border-bottom-left-radius: 50px;
    width: 150px;
    height: 40px;
    background-color: white;
    transition: 1s;
}

.buttons .but1:hover {
    background-color: white;
}

.buttons .but2 {
    text-align: center;
    font-size: 20px;
    margin: 0px 10px;
    border: 2px solid orange;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
    width: 150px;
    transition: 1s;
}

.buttons .but2:hover {
    background-color: but;
}

.buttons .but1 a {
    text-decoration: none;
    color: #603F83FF;
    transition: 1s;
}

.buttons .but2 a {
    text-decoration: none;
    color: #603F83FF;
    transition: 1s;
}

.outerbox div img {
    height: 100px;
    width: 100px;
    margin: 10px;
    border-radius: 50%;
    object-fit: cover;
    transition: 2s;
}

.outerbox div img:hover {
    transform: scale(1.3);
}

.content {
    text-align: justify;
    padding: 10px;
    background-color: rgb(238, 238, 238);
    border-radius: 10px;
    border: 2px solid rgb(187, 187, 187);
    width: 20vw;
    background-color: gray;
    color: white;
}

.box {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px;

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
}

#navbar {
    display: flex;
    align-items: center;
    position: fixed;
    width: 100%;
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
    color: whitesmoke;
    transition: 0.5s;

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
}


.dropdown_menu_child ul li {
    margin: 0;
    margin-bottom: 20px;
}

.dropdown_menu ul li:hover .dropdown_menu_child {
    display: block;
}
</style>
  <?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="spacebuddy";
 
 $conn=mysqli_connect($servername,$username,$password,$database);
 $id=$_GET['catid'];
 echo ' <nav id="navbar">
 <div id="logo">
     <img src="images/spacebuddy-removebg-preview.png" alt="logo">
 </div>
 <div class="list">
     <ul>
         <li class="item"><a href="home.html">Home</a></li>
         <li class="item"><a href="home.html">Inbox</a></li>
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
         <li class="item"><a href="about.html">About us</a></li>
         <li class="item"><a href="#">Contact us</a></li>
     </ul>
 </div>
</nav>
</section>';
    ?>
    <br>
    <br>
<?php
$sql="SELECT * FROM `planetarylist`  WHERE cat_id=$id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $planet_name=$row['planet_name'];
    $planet_description=$row['planet_description'];
}
    echo ' <video src="videos/'. $id.'.mp4" autoplay muted loop></video>
    <div class="mercurysection container ">
                <h1 id="mercury">'. $planet_name.'</h1>
                <br>
                <br>
                <br>
                <hr>
                <div class="mercurymain" id="planet">

            <p>'.$planet_description.'
            </p>
        </div>
</div>';

$id=$_GET['catid'];
$sql= "SELECT * FROM `threadlist` WHERE threadcat_id=$id";
$result=mysqli_query($conn,$sql);
    echo '<section id="products">
            <div class="outerbox">
            ';
            while($row= mysqli_fetch_assoc($result)){
                $thread_id=$row['thread_id'];
                $thread_name=$row['thread_name'];
                $thread_description=$row['thread_description'];
               echo  '<div class="box">
                    <img src="info_img/'.$thread_id.'.jpg" alt="product1">
                    <div class="content shadow">
                        <h1>'. $thread_name.'</h1>
                        <hr>
                        <br>
                        '. substr($row['thread_description'],0,100).'...
                        <div class="buttons">
                            <button class="but1"><a href="highlights.php?catid='.$thread_id.'">View More</a></button>
                        </div>
                    </div>
                </div>
               ';
        }
        echo ' </div>
        </section>';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

