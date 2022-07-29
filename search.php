<?php
// including connection file
include 'includes/connection.php';

//setting up variable to post search query data. 
$searchValue = $_POST['query'];

// sql statement using like to perform a search query based on criteria.
$sql = "SELECT * FROM `products` 
WHERE `Name` LIKE '%$searchValue%' OR
 `Description`LIKE '%$searchValue%' OR 
 `Price` LIKE '%$searchValue%' OR
 `Review` LIKE '%$searchValue%' OR
  `Listed` LIKE '%$searchValue%' OR
  `Location` LIKE '%$searchValue%' OR
  `Brand` LIKE '%$searchValue%' OR
   `Condition` LIKE '%$searchValue%'";

// if else statement to check if search is set and post data using search value. 
if (isset($_POST['search'])) {
    $searchValue = $_POST['query'];

    //setting up data variable to check against the db by using the sql statement.
    $data = $conn->query($sql);

    // if else to check number of rows returned is not zero, else show message.
    if($data->num_rows != 0) {
       
    } else {
        echo 'No results found';
    }

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Search Result</title>
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
    <div class="col-md-12">
        <h2 class="search">Search Result</h2>
        <?php
        //loop through each result and show product data to screen.
         foreach($data as $row) {  ?> 
            <p class="prod"><?php echo $row['Name']; ?></p>   
            <img class="prods" src="<?php echo $row['URL_image']; ?>">
            
            <p>DESCRIPTION: <?php echo $row['Description']; ?></p>
            <p>LOCATION: <?php echo $row['Location']; ?></p>
            <p>PRICE: <?php echo $row['Price']; ?></p>
            <p>REVIEW: <?php echo $row['Review']; ?></p>
            <p>LISTED: <?php echo $row['Listed']; ?></p>
            <p>CONDITION: <?php echo $row['Condition']; ?></p>
        <?php } ?>
    </div>
  </div>
</div>
</body>
<footer>Jade Graham 2022&copy;</footer>
</html>