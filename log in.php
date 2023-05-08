<?php include('<php>server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/try css.css">
    <link rel="icon" href="imgs/icon.png">
    <title>pharmacy name: log in</title>
  </head>
  <body>
    <h1>Pharmacy name</h1>
    <div class="forms">
    <form action="/action_page.php" method="post">
      <input type="datalist" list="user" placeholder="Customer/Pharmacist">
      <datalist id="user">
      <option value="Customer">
      <option value="Pharmacist">
      </datalist><br>
      <label for="idno">ID Number:</label><br>
      <input type="text" id="idno" placeholder="Enter 6 digits from 0 to 9" name="idno" pattern="[0-9]{6}"><br>
      <label for="name">Full Name:</label><br>
      <input type="text" id="name" placeholder="Enter your full name" name="name"><br>
      <label for="email">Email Address:</label><br>
      <input type="text" id="email" placeholder="Enter your email address" name="email" required><br>
      <label for="pwd">Password:</label><br>
      <input type="password" id="pwd" placeholder="Password" name="pwd" required><br>
      <input type="submit" value="Log In"><br>
      <label id="check">
        <input type="checkbox" checked="checked">Remember Me
      </label>
     </form>
     <p id="crtacc">Don't have an account?<a href="sign up.html">Create Account</a><p>
    </div>
   </body>
</html>
