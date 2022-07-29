<?php 
// including connection file.
    include 'includes/connection.php';

    // sql statement to select all data from the products table where the product matches the id selected.
      $sql = 'SELECT * FROM `products` WHERE ID = '.$_GET['id'];
    // data variable to run connection and sql statment.  
      $data = $conn->query($sql);
      // fetching record from database.
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
            <div class="col-md-3">
                <form action="products.php" method="get" >
                    <div>
                        <input class="form-control mr-sm-2" id="prodSearch" name="prodSearch" type="text" placeholder="I'm looking for...">
                        <p>IN</p>
                        <input class="form-control mr-sm-2" id="locationSearch" name="locationSearch" type="text" placeholder="Glasgow...">
                        <button class="btn btn-success" id="submit" name="submit" type="submit">Go</button>
                    </div>  
                    
                    <h2>FILTER BY...</h2>

                    <div class="dropdown">
                        <select name="Category" id="category" name="category" required>
                            <option value="" default>Category</option>
                            <option value="Consoles & Gaming">Consoles & Gaming</option>
                            <option value="Mobiles & Tablets">Mobiles & Tablets</option>
                            <option value="PCs & Laptops">PCs & Laptops</option>
                            <option value="Screens & Audio">Screens & Audio</option>
                        </select>
                    </div>

                    <div class="dropdown">
                        <select name="Price" id="price" name="price">
                            <option value="" default>Price</option>
                            <option value="ASC">Low to high</option>
                            <option value="DESC">High to low</option>
                        </select>
                    </div>

                    <div class="dropdown">
                        <select name="Reviews" id="reviews" name="reviews">
                            <option value="" default>Review</option>
                            <option name="5 Star">5 Star</option>
                            <option name="4 Star">4 Star</option>
                            <option name="3 Star">3 Star</option>
                        </select>
                    </div>

                    <div class="dropdown">
                        <select name="Brand" id="brand" name="brand">
                            <option value="" default>Brand</option>
                            <option name="Acer">Acer</option>
                            <option name="Nintendo">Nintendo</option>
                            <option name="Playstation">Playstation</option>
                            <option name="Dell">Dell</option>
                            <option name="Marshall">Marshall</option>
                            <option name="Apple">Apple</option>
                            <option name="Samsung">Samsung</option>
                        </select>
                    </div>

                    <div class="dropdown">
                        <select name="Condition" id="condition" name="condition">  
                            <option value="" default>Condition</option> 
                            <option name="New">New</option>
                            <option name="Exellent">Exellent</option>
                            <option name="Good">Good</option>
                            <option name="Fair">Fair</option>
                            <option name="Poor">Poor</option>
                        </select>
                    </div>

                    <div class="dropdown">
                        <select name="Listed" id="listed" name="listed">
                            <option value="" default>Select listing:</option> 
                            <option name="Today" href="#">Today</option>
                            <option name="1 Week" href="#">1 Week</option>
                            <option name="2 Weeks" href="#">2 Weeks</option>
                        </select>
                    </div>
                    <button class="btn btn-submit" type="submit">Filter</button>
                </form>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top">
                          <p class="prod">
                            <?php
                          // displays the product name.
                           echo $record['Name']; 
                           ?></p>
                          <img class="prods" src="
                          <?php
                          // displays the product image
                           echo $record['URL_image']; 
                          ?>">
                        </div>
                    </div>  

                    <div class="col-md-6">
                      <div class="middle">
                        <p class="descr">LOCATION: 
                          <?php
                          // displays the product location
                           echo $record['Location']; 
                           ?></p>
                        <p class="list">LISTED: 
                          <?php
                          // displays the product listing date.
                           echo $record['Listed']; 
                          ?></p>
                        <p class="list">CONDITION: 
                          <?php
                          // displays the product condition.
                           echo $record['Condition']; 
                           ?> </p>
                        <p class="list">REVIEW: 
                          <?php
                          //for loop adding a review star until it hits the value.
                           for($i = 0; $i < $record['Review']; $i++) { 
                             ?>
                             <!-- star review svg path -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg>
                          <?php } ?>
                        </p>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="middle">
                        <p class="descr">DESCRIPTION:</p>
                            <p>
                              <?php
                              //displays the product description.
                               echo $record['Description']; 
                               ?></p>
                      </div>
                      <div class="bottom">
                        <p class="price">PRICE: 
                          <?php
                          //displays product price
                           echo $record['Price']; 
                           ?></p>
          
                       
                      </div>
                    </div>

                 </div>
              </div>      
            </div>
        </div>
    </div>
</body>
<footer>Jade Graham 2022&copy;</footer>
</html>