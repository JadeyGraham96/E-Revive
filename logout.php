<?php
//session
    session_start();
    // if user session is false, destroy session 
    $_SESSION["loggedin"] = false;
    session_destroy();

    header('Location: /DGC'); // after logging out locate user back to home. 
?>