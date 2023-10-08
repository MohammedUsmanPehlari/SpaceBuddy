<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location : login.php");
        exit;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>spacebuddy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" href="home.css">
</head>
  <body>
  <video src="videos/solar_system_-_116577 (1440p).mp4" autoplay muted loop></video>
  <?php    
        $servername="localhost";
        $username="root";
        $password="";
        $database="spacebuddy";
        
        $conn=mysqli_connect($servername,$username,$password,$database);
        echo '<section id="secnav">
        <nav id="navbar">
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
    <br>
    <?php
        $sql="SELECT * FROM `planetarylist`";
        $result= mysqli_query($conn,$sql);
            echo '
            <section id="products">
            <div class="outerbox">
            ';
            while($row= mysqli_fetch_assoc($result)){
                $planet_name=$row['planet_name'];
                $planet_id=$row['planet_id'];
                $cat_id=$row['cat_id'];

               echo  '<div class="box">
                    <img src="head_img/'.$cat_id.'.jfif" alt="product1">
                    <div class="content shadow">
                        <h1><a href="thread.php?catid='.$cat_id.'" style="text-decoration:none; color: white;">'. $planet_name.'</h1></a>
                        <br>
                        <hr>
                        <br>
                        '. substr($row['planet_description'],0,250).'...
                        <div class="buttons">
                            <button class="but1"><a href="thread.php?catid='.$cat_id.'">View More</a></button>
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
