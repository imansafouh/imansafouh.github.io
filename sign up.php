<?php include('<php>server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/try css.css">
    <link rel="icon" href="imgs/icon.png">
    <title>pharmacy name: Sign Up</title>
  </head>
  <body>
    <h1>Pharmacy name</h1>
    <div class="forms">
      <form action="php/signup.php" method="post">
          <label for="idno">ID Number:</label><br>
          <input type="text" id="idno" placeholder="Enter your national ID number" title="MUST contain 14 digits" name="idno" pattern="[0-9]{14}"><br>
          <label for="name">Full Name:</label><br>
          <input type="text" id="name" placeholder="Enter your full name" name="name"><br>
          <label for="email">Email:</label>
          <input type="text" placeholder="Enter Email" name="email" required>
          <label for="address">Address:</label>
          <input type="text" placeholder="Enter your address" name="address" required>
          <label for="phoneno">Phone Number:</label>
          <input type="text" placeholder="01xxxxxxxxx" name="phoneno" pattern="[0-9]{11}" required>
          <label for="psw">Password:</label>
          <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*[0-9])(?=.*[!@#$%^&*-+=_]).{8,}" required>
          <label for="confirmpsw">Confirm Password:</label>
          <input type="password" placeholder="Confirm Password" name="confirmpsw" required>
          <input type="submit" value="Sign Up"><br>
          <p id="crtacc">already have an account?<a href="log in.html">log in</a><p>
      </form>
    </div>
   </body>
</html>
