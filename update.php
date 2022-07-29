<!-- include files -->
<?php 
    include 'includes/connection.php';
    include 'includes/authentication.php';
    //setting up sql statement
    $sql = 'SELECT * FROM `products` WHERE `ID` = '.$_GET['id']; 
    //variable to run connection query
    $data = $conn->query($sql);
    //variable to fetch record data
    $record = mysqli_fetch_assoc($data);
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
        <h2>Update</h2>
        <div class="row">
            <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="prodArea">
                            <!-- returns record image -->
                            <img class="prods" src="<?php echo $record['URL_image']; ?>">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="textArea">
                            <form class="update" action="includes/updateProduct.php" method="post">
                                <div class="form-group">
                                    <label for="prodName">Name:</label>
                                    <!-- returns record name -->
                                    <input type="text" class="form-control" id="prodName" name="prodName" placeholder="Enter Product Name" value="<?php echo $record['Name']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="prodDesc">Description:</label>
                                    <!-- returns record description -->
                                    <input type="text" class="form-control" id="prodDesc" name="prodDesc" placeholder="Enter Product Description" value="<?php echo $record['Description']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="prodRev">Review:</label>
                                    <!-- returns record review -->
                                    <input type="number" class="form-control" id="prodRev" name="prodRev" placeholder="Enter Product Review" value="<?php echo $record['Review']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="prodLocat">Location:</label>
                                    <!-- returns record Location -->
                                    <input type="text" class="form-control" id="prodLocat" name="prodLocat" placeholder="Enter Product Location" value="<?php echo $record['Location']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="prodDate">Listed:</label>
                                    <!-- returns record listing date. -->
                                    <input type="date" class="form-control" id="prodDate" name="prodDate" placeholder="Enter Date listed" value="<?php echo $record['Listed']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="prodPrice">Price:</label>
                                    <!-- returns record price -->
                                    <input type="number" class="form-control" id="prodPrice" name="prodPrice" placeholder="Enter Product Price" value="<?php echo $record['Price']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="prodPrice">Category:</label>
                                    <select name="Category" class="form-control" id="prodCat" name="prodCat" required>
                                        <option value="" default>Category</option>
                                        <!-- if record matches category display the selected record -->
                                        <option value="Consoles & Gaming" <?php if($record['Category'] === "Consoles & Gaming") { echo 'selected'; }?>>Consoles & Gaming</option>
                                        <option value="Mobiles & Tablets" <?php if($record['Category'] === "Mobiles & Tablets") { echo 'selected'; }?>>Mobiles & Tablets</option>
                                        <option value="PCs & Laptops" <?php if($record['Category'] === "PC & Laptops") { echo 'selected'; }?>>PCs & Laptops</option>
                                        <option value="Screens & Audio" <?php if($record['Category'] === "Screens & Audio") { echo 'selected'; }?>>Screens & Audio</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="prodCond">Condition:</label>
                                    <select name="Condition" class="form-control" id="prodCond" name="prodCond" required>
                                        <option value="" default>Condition</option>
                                        <!-- if record matches condition display the selected record -->
                                        <option value="Good" <?php if($record['Condition'] === "Good") { echo 'selected'; }?>>Good</option>
                                        <option value="Excellent" <?php if($record['Condition'] === "Excellent") { echo 'selected'; }?>>Excellent</option>
                                        <option value="Fair" <?php if($record['Condition'] === "Fair") { echo 'selected'; }?>>Fair</option>
                                        <option value="Poor" <?php if($record['Condition'] === "Poor") { echo 'selected'; }?>>Poor</option>
                                    </select>
                                </div>
                                <input type="hidden" name="ID" value="<?php echo $record['ID']; ?>" />
                                <div class="bttns">
                                    <input type="submit" value="Submit" name="submit">
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body