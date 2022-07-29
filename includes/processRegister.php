<?php
// including connection file.
include 'connection.php';

// Setting up variables by posting data from register form. i.e name, email, username, password, confirming pw and account. 
$usersName = $_POST['usersName'];  
$usersEmail = $_POST['usersEmail'];
$userNames = $_POST['userNames'];
$userPass = password_hash($_POST['usersPass']);  
$confPass = password_hash($_POST['usersConfPass']);
$account = $_POST['accountType'];


// if else to check user password matches with confirm, inserts sql statement into users adding their values. 
if ($userPass == $confPass) {

    $sql = "INSERT INTO `users` (`Username`, `Password`, `Name`, `Email`, `Account`) VALUES ('$userNames', '$userPass', '$usersName', '$usersEmail', '$account');";
    
    // result is checking sql against connection. 
    $result = $conn->query($sql);

    // if result is successful (true), user session is equal to username, alert the user a record has been created successfully. 
    if ($result === TRUE) {
      $SESSION["userLogged"] = $userNames;
      echo "New record created successfully";

      // if account is equal to admin account then redirect user to admin page
      if($account == 'Admin') {
        header('location:/DGC/admin.php?username='.$user);
      } else {
        // else if the account is standard then redirect to user page
        header('location:/DGC/user.php?username='.$user);
      }
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error; // else the connection has failed and can't process registration
    }
}
else { // Else passwords don't match.
    echo "Passwords do not match!";
}
?>