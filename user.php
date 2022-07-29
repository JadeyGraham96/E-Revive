<!-- including authentication file and message to display using if set statement-->
<?php
  include 'includes/authentication.php';
  $message = $_SESSION['message'];
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
<script type="text/javascript" src="password.js"></script>
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
    <div class="userSection">
      <div class="row">
        <div class="col-md-4">
          <img class="user-photo" src="images/user.png">
        </div> 
        <div class="col-md-8"> 
          <div class="message">
            <!-- echo message to screen to welcome user. -->
            <?php echo $message  ?>
          </div>
      </div>
    </div>  
    <div class="col-md-12">
        <div class="buttons">
          <button onclick="location.href='myprods.php'" class="btn btn-myprod" type="myProd">Products</button>
          <button onclick="location.href='newprod.php'" class="btn btn-newprod" type="newProd">New Product</button>
          <button onclick="location.href='logout.php'" class="btn btn-logout" type="logout">Logout</button>
        </div>
     </div>
   </div>
 </div>
</body>
<footer>Jade Graham 2022&copy;</footer>
</html>