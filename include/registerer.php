<?php

session_start();

$connection = mysqli_connect("localhost", "root", "", "adminpanel");

if(isset($_POST['registerbtn']))
 {
  $username =  $_POST['username'];
  $email =  $_POST['email'];
  $password =  $_POST['password'];
  $cpassword =  $_POST['confirmpassword']; 

  if ($password === $cpassword )
   {

    $query = "INSERT INTO `register`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
    $query_run = mysqli_query($connection, $query);
  

    if($query_run)
    {
      echo "saved";
      $_SESSION["success"] = "Admin Profile Added";
      header('Location: add_new_user.php');
    }
    else {
  
      echo "not saved";
      $_SESSION["status"] = "Admin Profile NOT Added";
      header('Location: add_new_user.php');
    }
  }
    else {
        $_SESSION['status'] = "Password and confirm Password Does not match";
        header('Location: add_new_user.php');
    }
  }


?>