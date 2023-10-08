<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$servername="localhost";
$username="root";
$password="";
$database="spacebuddy";

$conn=mysqli_connect($servername,$username,$password,$database);

$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$booking_source=$_POST['booking_source'];
$booking_destination=$_POST['booking_destination'];
$members=$_POST['members'];
$source_date=$_POST['source_date'];
$destination_date=$_POST['destination_date'];

$sql="INSERT INTO `bookinglist`( `username`, `email`, `contact`, `booking_source`, `booking_destination`, `members`, `source_date`, `destination_date`) VALUES ('$username','$email','$contact','$booking_source','$booking_destination','$members','$source_date','$destination_date')";
$result=mysqli_query($conn,$sql);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="booking.css">
  </head>
  <body>
    <div class="booking-form">
    <form action="booking.php" method="post">  
    <h1>Welcome</h1>
      <div class="booking-input-container">
        <input
          class="input-content"
          type="text"
          placeholder=""
          maxlength="50"
          required
          name="username";
          id="usename";
        />
        <label>Useraname</label>
      </div>
      <div class="submit-input-container">
        <input
          class="input-content"
          type="email"
          placeholder=""
          maxlength="50"
          required
          name="email";
          id="email";
        />
        <label>Email</label>
      </div>
      <div class="submit-input-container">
        <input
          class="input-content"
          type="tel"
          placeholder=""
          maxlength="50"
          required
          name="contact";
          id="contact";
        />
        <label>Mob-No</label>
      </div>
      <div class="submit-input-container">
        <input
          class="input-content"
          type="text"
          placeholder=""
          maxlength="50"
          required
          name="booking_source";
          id="booking_source";
        />
        <label>Source</label>
      </div>
      <div class="submit-input-container">
        <input
          class="input-content"
          type="text"
          placeholder=""
          maxlength="50"
          required
          name="booking_destination";
          id="booking_destination";
        />
        <label>Destination</label>
      </div>
      <div class="submit-input-container">
        <input
          class="input-content"
          type="number"
          placeholder=""
          min="1"
          max="10"
          required
          name="members";
          id="members";
        />
        <label>Members</label>
      </div>
      <div id="date">Source Date:</div>
      <div class="submit-input-container">
        <input
          class="input-content"
          type="date"
          placeholder=""
          maxlength="50"
          required
          name="source_date";
          id="source_date";
        />
      </div>
      <div id="date">Source Date:</div>
      <div class="submit-input-container">
        <input
          class="input-content"
          type="date"
          placeholder=""
          maxlength="50"
          required
          name="destination_date";
          id="destination_date";
        />
      </div>  
      
      <div class="submit-btn">
        <button type="submit">
          Submit
        </button>
      </div>
      </form> 
      </div> 
 
  </body>
</html>