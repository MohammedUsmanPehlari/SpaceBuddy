<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Space Buddy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Mukta:wght@600&family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;1,6..12,300;1,6..12,600&family=PT+Serif:ital,wght@1,700&family=Poppins:wght@200&family=Preahvihear&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Libre+Baskerville&family=Merriweather&family=Mukta:wght@600&family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;1,6..12,300;1,6..12,600&family=PT+Serif:ital,wght@1,700&family=Poppins:wght@200&family=Preahvihear&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<style>

*,
::before,
::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}


video {
  object-fit: cover;
  position: absolute;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 1;
}
p{
font-family: 'Merriweather', serif;
font-family: 'Mukta', sans-serif;
font-family: 'Nunito Sans', sans-serif;
font-family: 'Poppins', sans-serif;
font-family: 'Preahvihear', sans-serif;
font-family: 'PT Serif', serif;
font-family: 'Ubuntu', sans-serif;
}

.home-content h1
{

font-family: 'Bree Serif', serif;
font-family: 'Libre Baskerville', serif;
font-family: 'Merriweather', serif;
font-family: 'Mukta', sans-serif;
font-family: 'Nunito Sans', sans-serif;
font-family: 'Poppins', sans-serif;
font-family: 'Preahvihear', sans-serif;
font-family: 'PT Serif', serif;
font-family: 'Ubuntu', sans-serif;
}

a {
        display: flex;
        text-decoration: none;
        color: bisque;
        padding: 18px;
    }

    li {
        list-style: none;
    }


body {
  font-family: Playfair Display, sans-serif;
  background: #f1f1f1;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
  background: rgba(0,0,0,0.6);
}

.home-content {
  width: 600px;
  margin: 0 auto;
  position: relative;
  top: 150px;
  color: #fff;
  z-index: 3;
}

.home-content h1 {
  font-family: Playfair Display, serif;
  text-align: center;
  text-transform: uppercase;
  font-size: 85px;
  line-height: 1.1;
}
.home-content p {
  font-family: Playfair Display, serif;
  /* text-align: center; */
  /* text-transform: uppercase; */
  font-size: 30px;
  margin: 30px 114px ;
  line-height: 1.1;
}

.home-content button {
    display: block;
    font-size: 20px;
    border: 1px solid #f1f1f1;
    border-radius: 31px;
    background: transparent;
    color: #fff;
    margin: 50px auto 0;
    padding: 4px 9px;
    cursor: pointer;
}

.content{
color:whitesmoke;
}





</style>


<body>
    <div class="home">
        <video autoplay muted loop>
          <source src="videos/space_ship_-_3 (360p).mp4" type="video/mp4" />
        </video>
      </div>

      <div class="overlay"></div>
      <div class="home-content">
        <h1> Space Buddy</h1>
     <p>Lets Travel Beyound Universe</p>
     <button class="Start Your Journey "><a href="login.php"> Let's Start </a> </button>
</div>


 
    
</body>
</html>
