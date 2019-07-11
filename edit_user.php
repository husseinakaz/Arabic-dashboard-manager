<?php 
include('registerer.php');
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<?php include('includes/header.php'); ?>
</head>
<body>
    <!--Start navigation header-->
    <?php include('includes/nav_header.php'); ?>
    <!--end of  navigation header-->
    
    <!--Start side bar -->
    <?php include('includes/side_bar.php'); ?>
    <!--end side bar-->

    <!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">إدارة الاعضاء</a></li>
                        <li class="bring_right"><a href="">إضافة عضو جديد</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">

                    <h1 class="heading_title">تعديل بيانات المستخدم</h1>


                    <!--Start status alert-->
                    <?php
                    $connection = mysqli_connect("localhost", "root", "", "adminpanel");
                    if (isset($_POST['edit_btn'])) {
                        $id = $_POST['edit_id'];
                        
                        $query = "SELECT * FROM register WHERE id='$id'";
                        $query_run = mysqli_query($connection,$query);
                        foreach ($query_run as $row) {
                            ?>
                            
                    <!---------------- start Registeration form   ----------------->
                    <?php
                        if(isset($_SESSION['success']) && $_SESSION['success'] !='' )
                        {
                            echo '<div role="alert" class="alert alert-success">
                            <strong> '.$_SESSION['success'].' </strong></div>';
                            unset($_SESSION['success']);
                        }
                 
                    
                        if(isset($_SESSION['status']) && $_SESSION['status'] !='' )
                        {
                            echo '<div role="alert" class="alert alert-danger"><strong> '.$_SESSION['status'].' </strong></div>';
                            unset($_SESSION['status']);
                        }
                    ?>
                    <div class="form">
                        <form class="form-horizontal" action="registerer.php" method="POST">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم العضو</label>
                                <div class="col-sm-10">
                                <input name="edit_username" value="<?php echo $row['username']; ?>" type="username" class="form-control" id="input0" placeholder="اسم العضو">
                                </div></div>
                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">البريد الالكتروني</label>
                                <div class="col-sm-10">
                                <input name="edit_email" value="<?php echo $row['email']; ?>" type="email" class="form-control" id="input2" placeholder="البريد الالكتروني">
                                </div></div>
                            <div class="form-group">
                                <label for="input3" class="col-sm-2 control-label bring_right left_text">كلمة المرور</label>
                                <div class="col-sm-10">
                                <input name="edit_password" value="<?php echo $row['password'] ?>" type="text" class="form-control" id="input3" placeholder="كلمة المرور">
                                </div></div>
                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label bring_right left_text">الصورة الشخصية</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" style="height: unset;" id="input4">
                                </div></div>
                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                    <button name="updatebtn" type="submit" class="btn btn-danger">تحديث</button>
                                    <button class="btn btn-default"><a href="view_all_users.php" >الغاء</a></button>
                                </div></div>
                                <?php
                        }
                      }
                    ?>
                        </form>    
                    <!---------------- End Registeration form    ----------------->
                    </div>
                </div>
            </div>
        </div>
    <!--/End Main content container-->


    </div>
    <!--/End body container section-->
    </div>
    <?php include('includes/footer.php'); ?>
    </div>
</body>
</html>