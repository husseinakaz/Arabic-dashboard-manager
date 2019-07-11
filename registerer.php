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


  if (isset($_POST['updatebtn']))
  {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE `register` SET `username` = '$username', `email` = '$email', `password` = '$password' WHERE `register`.`id` = '$id' ";
    
    $query_run = mysqli_query($connection, $query);

    if ($query_run)
    {
      $_SESSION['success'] = "Your data is updated";
      header('Location: view_all_users.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is NOT updated";
      header('Location: view_all_users.php');
    }
  }


  if (isset($_POST['delete_btn']))
  {
    $id = $_POST['delete_id'];

    
    $query = "DELETE FROM `register` WHERE `register`.`id` = $id";
    $query_run = mysqli_query($connection, $query);

    if ($query_run)
    {
      $_SESSION['success'] = "Your data Has been deleted";
      header('Location: view_all_users.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is NOT deleted";
      header('Location: view_all_users.php');
    }
  }
?>