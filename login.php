<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/icon.css" rel="stylesheet">
        <link id="css" href="css/light_style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="body">

        <!--Start Login Form--> 
        <div class="login_area">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                        <h4 class="modal-title">تسجيل الدخول الي لوحة التحكم</h4>
                    </div>
                    <div id="test" class="modal-body notvis">
                        ادخل اسم المستخدم او البريد الالكتروني وكلمة المرور
                        <form method="get" action="/index.php" style="direction: ltr">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" placeholder="اسم المستخدم" aria-describedby="username">
                                <span class="input-group-addon glyphicon glyphicon-user" id="username"></span>
                            </div>
                            <div class="input-group input-group-lg">
                                <input type="password" class="form-control" placeholder="كلمة المرور" aria-describedby="password">
                                <span class="input-group-addon glyphicon glyphicon-lock" id="password"></span>
                            </div>
                        </form>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> حفظ بيانات الدخول 
                            </label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                        <button type="button" class="btn btn-primary">تسجيل دخول</button>
                    </div>
                </div>
            </div>
        </div>
        <!--End Login From-->
        
        <!--Please Remove this <a> tag-->
        <a href="index.php" style="text-align: center; display: block; margin-top: 50px; color: rgb(255, 0, 0); font-weight: bolder; font-size: 30px;">المتابعه لمعاينة صفحات لوحة التحكم</a>
        <!--Please Remove this <a> tag-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script src="js/bootstrap.min.js"></script>


        <!--Start Login Area Show Animation-->
        <script type="text/javascript">
            $(document).ready(function () {
                $(".login_area").show(1000);
            });
        </script>
        <!--End Login Area Show Animation-->
        
        
    </body>
</html>