<!-- include files -->
<?php 
include('includes/connection.php');
include('includes/authentication.php');
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
        <h2>Add New Product</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="textArea">
                    <form class="update" action="includes/addProduct.php" method="post">
                        <div class="form-group">
                            <label for="prodName">Name:</label>
                            <input type="text" class="form-control" id="prodName" name="prodName" placeholder="Enter Product Name" required>
                        </div>
                        <div class="form-group">
                            <label for="prodDesc">Description:</label>
                            <input type="text" class="form-control" id="prodDesc" name="prodDesc" placeholder="Enter Product Description" required>
                        </div>
                        <div class="form-group">
                            <label for="prodRev">Review:</label>
                            <input type="number" class="form-control" id="prodRev" name="prodRev" placeholder="Enter Product Review" required>
                        </div>
                        <div class="form-group">
                            <label for="prodName">Image URL:</label>
                            <input type="text" class="form-control" id="prodImgUrl" name="prodImgUrl" placeholder="Enter Product Image URL" required>
                        </div>
                        <div class="form-group">
                            <label for="prodLocat">Location:</label>
                            <input type="text" class="form-control" id="prodLocat" name="prodLocat" placeholder="Enter Product Location" required>
                        </div>
                        <div class="form-group">
                            <label for="prodDate">Listed:</label>
                            <input type="date" class="form-control" id="prodDate" name="prodDate" placeholder="Enter Date listed" required>
                        </div>
                        <div class="form-group">
                            <label for="prodPrice">Price:</label>
                            <input type="number" class="form-control" id="prodPrice" name="prodPrice" placeholder="Enter Product Price" required>
                        </div>
                        <div class="form-group">
                            <label for="prodPrice">Category:</label>
                            <select name="Category" class="form-control" id="prodCat" name="prodCat" required>
                                <option value="" default>Category</option>
                                <option value="Consoles & Gaming">Consoles & Gaming</option>
                                <option value="Mobiles & Tablets">Mobiles & Tablets</option>
                                <option value="PCs & Laptops">PCs & Laptops</option>
                                <option value="Screens & Audio">Screens & Audio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prodCond">Condition:</label>
                            <select name="Condition" class="form-control" id="prodCond" name="prodCond" required>
                                <option value="" default>Condition</option>
                                <option value="Good">Good</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            </select>
                        </div>
                        <div class="bttns">
                            <input type="submit" value="Submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body