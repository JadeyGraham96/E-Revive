<!-- includes connection and authentication-->
<?php 
    include 'includes/connection.php';
    include 'includes/authentication.php';
    // sql statement set up and data is checking the connection and running sql.
    $sql = 'SELECT * FROM `products`';
    $data = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Products Page</title>
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
<a class="navbar-brand" href="#">
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
        <h2>Products</h2>
        <div class="row">
            <div class="col-md-12">
                <?php 
                  // loop each record from db as variable row
                  foreach($data as $row) { 
                ?>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="prodArea">
                                    <!-- name and product image from db as row-->
                                    <p class="prod"><?php echo $row['Name']; ?></p>
                                    <img class="prods" src="<?php echo $row['URL_image']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="descr">
                                        <!-- description from db as row-->
                                        <p><?php echo $row['Description']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bttns">
                              <!-- update and delete buttons using product id to update/delete-->
                                <a class="update" href="update.php?id=<?php echo $row['ID']; ?>">Update</a>
                                <a class="delete" href="includes/delete.php?id=<?php echo $row['ID']; ?>">Delete</a>
                            </div>
                        </div>
                    </div>  
                <?php } ?>
            </div>
        </div>
    </div>
</body>
<footer>Jade Graham 2022&copy;</footer>
</html>