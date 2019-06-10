<!DOCTYPE html>
<html lang="ar">
<head>
<?php include('includes/header.php'); ?>
</head>
<body>

    <!--navbar header-->
    <?php include('includes/nav_header.php'); ?>
    <!--End navbar----->

        <!--Start Side bar main menu-->
    <?php include('includes/side_bar.php'); ?>
        <!--/End side bar main menu-->

        <!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">إدارة الاعضاء</a></li>
                        <li class="bring_right"><a href="">عرض كل الاعضاء</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                
                <?php
                    include('includes/connection.php');
                    $query = "SELECT * FROM register";
                    $query_run = mysqli_query($connection, $query);
                ?>
                
                <div class="page_content">
                    <h1 class="heading_title">عرض كل الاعضاء</h1>
                    <div class="wrap">
                        <table class="table table-bordered">
                        <tr>
                        <td>#</td>
                        <td>اسم العضو</td>
                        <td>الايميل</td>
                        <td>كلمة السر</td>
                         <td>التحكم</td>
                    </tr>

                          <?php

                        if(mysqli_num_rows($query_run) > 0)
                {
                while($row = mysqli_fetch_assoc($query_run))
                    {
                 ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                    </tr>
             <?php
        }

        }else {
                echo "no record found";
                }

                ?>
                        </table>

                        <nav class="text-center">
                            <ul class="pagination">
                                <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">»</span></a>
                                </li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a aria-label="Next" href="#"><span aria-hidden="true">«</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--/End Main content container-->


    </div>
    <!--/End body container section-->
</div>
<!-- start footer --->
<?php include('includes/footer.php'); ?>
<!-- end footer --->
</body>

</html>