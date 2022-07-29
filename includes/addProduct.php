<?php
    // including connection script
    include('connection.php');

    // if else statement checking if submit form is set and inserting values into products. 
    if(isset($_POST['submit'])) {
        $sql =  "INSERT INTO Products (Name, Description, Review, Location, Listed, URL_image, Price, Category, `Condition`)".
                " VALUES ('".$_POST['prodName']."', '".$_POST['prodDesc']."','".$_POST['prodRev']."','".$_POST['prodLocat']."','".$_POST['prodDate']."','".$_POST['prodImgUrl']."','".$_POST['prodPrice']."','".$_POST['Category']."','".$_POST['Condition']."');";
        //running connection against sql.
        $conn->query($sql);
    }

    //locates user back to my products.
    header('Location: /DGC/myprods.php')
?>