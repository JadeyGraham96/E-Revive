<?php 
// starting session
    session_start();
    
    // checking session if user is logged in access to other pages.
    if(!$_SESSION["loggedin"]) {
        header('Location: /DGC/');
    }
?>