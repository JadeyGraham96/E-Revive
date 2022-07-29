<?php
// include files connection and authetication
include 'connection.php';
include 'authentication.php';

// if get id is set, run sql to delete the selected product.
if(ISSET($_GET['id'])) {
    $sql = 'DELETE FROM `products` WHERE ID = ' . $_GET['id'];
    $result = $conn->query($sql);
}
// locates user back to my products. 
header('Location: /DGC/myprods.php');
?>

