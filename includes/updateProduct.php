<?php 
// including connection file.
    include('connection.php');

    //var_dump($_POST); // test 

    // if update form is set, run sql to update product.
    if(isset($_POST['submit'])) {
        $sql =  "UPDATE Products SET Name = '".$_POST['prodName'].
                "', Description = '".$_POST['prodDesc'].
                "', Review = '".$_POST['prodRev'].
                "', Location = '".$_POST['prodLocat'].
                "', Listed = '".$_POST['prodDate'].
                "', Price = '".$_POST['prodPrice'].
                "', Category = '".$_POST['Category'].
                "', `Condition` = '".$_POST['Condition'].
                "' WHERE ID = ".$_POST['ID'].";";
        $conn->query($sql); // checking connection to run sql
    }

    header('Location: /DGC/myprods.php') // locates user back to my products after updating. 
?>