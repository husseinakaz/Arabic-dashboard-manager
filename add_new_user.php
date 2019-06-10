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

                    <h1 class="heading_title">إضافة عضو جديد</h1>


                    <!--Start status alert-->
                    
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
                    

                    <!---------------- start Registeration form   ----------------->
                    <div class="form">
                        <form class="form-horizontal" action="registerer.php" method="post">
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم العضو</label>
                                <div class="col-sm-10">
                                <input name="username" type="username" class="form-control" id="input0" placeholder="اسم العضو">
                                </div></div>
                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">البريد الالكتروني</label>
                                <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" id="input2" placeholder="البريد الالكتروني">
                                </div></div>
                            <div class="form-group">
                                <label for="input3" class="col-sm-2 control-label bring_right left_text">كلمة المرور</label>
                                <div class="col-sm-10">
                                <input name="password" type="text" class="form-control" id="input3" placeholder="كلمة المرور">
                                </div></div>
                            <div class="form-group">
                                <label for="input3" class="col-sm-2 control-label bring_right left_text">تاكيد كلمة المرور</label>
                                <div class="col-sm-10">
                                <input name="confirmpassword" type="text" class="form-control" id="input3" placeholder="تاكيد كلمة المرور">
                                </div></div>
                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label bring_right left_text">الصورة الشخصية</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control" style="height: unset;" id="input4">
                                </div></div>
                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                    <button name="registerbtn" type="submit" class="btn btn-danger">إضافة العضو</button>
                                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                                </div></div>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
</body>

</html>