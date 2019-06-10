<?php

session_start();

include('includes/connection.php');

if(isset($_POST['registerbtn']))
 {
  $username =  $_POST['username'];
  $email =  $_POST['email'];
  $password =  $_POST['password'];
  $cpassword =  $_POST['confirmpassword']; 

  if ($password && $cpassword )
   {

    $query = "INSERT INTO `register`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
    $query_run = mysqli_query($connection, $query);
  

    if($query_run&&$username != "")
    {
      echo "saved";
      $_SESSION["success"] = "11تم اضافة العضو";
      header('Location: add_new_user.php');
    }
    else {
  
      echo "not saved";
      $_SESSION["status"] = "لم يتم اضافة العضو";
      header('Location: add_new_user.php');
    }
  }
    else {
        $_SESSION['status'] = "لم يتم ادخال كلمة السر وتاكيد كلمة السر!!";
        header('Location: add_new_user.php');
    }
    if($password != $cpassword)
    {

      echo "not saved";
      $_SESSION["status"] = "كلة السر غير متطابقة";
      header('Location: add_new_user.php');
    }
    if($username === "") {
      echo "not saved";
      $_SESSION["status"] = "لم لتم كتابة اسم المستخدم";
      header('Location: add_new_user.php');
    }
  }


?>