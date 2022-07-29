<!-- session -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript" src="login.js"></script>
</head>
<header>
<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-md">
<a class="navbar-brand" href="index.php">
    <img class="logo-top"src="images/e-Revive.png" alt="Logo">
  </a>
  <form class="form-inline" action="search.php" method="post">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name='query'>
    <button class="btn btn-success" name ="search" type="submit">Search</button>
  </form>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Login |</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="products.php">Products |</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="user.php"> User</a>
    </li>
  </ul>

</nav>
</header>
<body>
<div class="container">
  <div class="row">
    <div class="login-section" id="overlay" class="cover blur-in">
      <div class="logo">
        <img src="images/e-Revive.png">
      </div>
      <form action="includes/processLogin.php" method="post">
        <div class="form-group">
          <label for="userName">Username:</label>
          <input type="text" class="form-control" id="userName" name="userName" aria-describedby="emailHelp" placeholder="Enter username" required>
        </div>
        <div class="form-group">
          <label for="userPass">Password:</label>
          <input type="password" class="form-control" id="userPass" name="userPass" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
    
    <div class="row pop-up">
    <div class="box small-6 large-centered">
      <a href="#" class="close-button">&#10006;</a>
      <h3>Sign up Today</h3>
        <form action="includes/processRegister.php" method="post">
          <div class="form-group">
            <label for="usersName">Name:</label>
            <input type="text" class="form-control" id="usersName" name="usersName" aria-describedby="emailHelp" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <label for="usersEmail">Email:</label>
            <input type="email" class="form-control" id="usersEmail" name="usersEmail" aria-describedby="emailHelp" placeholder="Enter Email" required>
          </div>
          <div class="form-group">
            <label for="userNames">Username:</label>
            <input type="text" class="form-control" id="userNames" name="userNames" aria-describedby="emailHelp" placeholder="Enter Userame" required>
          </div>
          <div class="form-group">
            <label for="usersPass">Create password:</label>
            <input type="password" class="form-control" id="usersPass" name="usersPass" aria-describedby="emailHelp" placeholder="Enter a password" required>
          </div>
          <div class="form-group">
            <label for="usersConfPass">Create password:</label>
            <input type="password" class="form-control" id="usersConfPass" name="usersConfPass" aria-describedby="emailHelp" placeholder="Confirm Password" required>
          </div>
          <div class="form-group">
            <label for="usersAccount">AccountType:</label>
            <select name="accountType" class="form-control" name="usersAccount" id="usersAccount" required>
              <option default>Select account type</option>
              <option value='admin'>Admin</option>
              <option value='standard'>Standard</option>
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
</body>
<footer>Jade Graham 2022&copy;</footer>
</html>