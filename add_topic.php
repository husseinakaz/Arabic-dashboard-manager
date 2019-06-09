<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/icon.css" rel="stylesheet">
        <link id="css" rel="stylesheet">
        <link rel="stylesheet" href="text_editor/themes/default.min.css" type="text/css" media="all" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--Start Header Area-->
        <header class="container-fluid navbar navbar-default">
            <div class='col-lg-4 col-md-5 col-sm-7 col-xs-12 pull-right title'>
                <span class='glyphicon glyphicon-cog title_icon'></span>
                <h1 class='h3 visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block title_text'>لوحة تحكم ادمني العربيه</h1> 
            </div>
            <div class='col-lg-2 col-md-3 col-sm-5 col-xs-12 text-center'><div class='dropdown  dropdown_nav'>
                    <button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown'>
                        <span class='glyphicon glyphicon-user user_icon'></span>
                        Hosam Zewain
                        <span class='caret'></span>
                    </button> 
                    <ul class='dropdown-menu' role='menu' aria-labelledby='dropdownMenu1'> 
                        <li>الوان اللوحة</li> 
                        <li role='presentation'>
                            <a role='menuitem' tabindex='-1' href='#' class='light'>light</a>
                            <a role='menuitem' tabindex='-1' href='#' class='dark'>dark</a>
                        </li>
                        <li role='presentation' class='divider'></li> 
                        <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>معلومات الحساب</a></li> 
                        <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>الرسائل الخاصة</a></li> 
                        <li role='presentation' class='divider'></li>
                        <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>تسجيل خروج</a></li></ul> 
                </div></div>
        </header>
        <!--End Header Area-->

        <!--Start Mobile size Main Menu-->
        <div class="btn-group rtl btn-block hidden-lg hidden-md hidden-sm visible-xs">
            <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown"> <span class="glyphicon glyphicon-th-list"></span>
                القائمة الرئيسية <span class="caret"></span>
            </button>
            <ul class="dropdown-menu main_menu_xs rtl text-center" role="menu">
                <li class="text-center"><a href="index.php">الرئيسية</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="siteinfo.php">بيانات الموقع</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">إضافة عضو</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">عرض الاعضاء</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">إضافة فئات</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">عرض الفئات</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">إضافة موضوع</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">عرض الموضوعات</a></li>
            </ul>
        </div>
        <!--End Mobile Size Main Meni-->


        <!--Start Admin Panal Main Body-->
        <div class="container-fluid main_block">
            <!--Start Admin Panal Main Left Menu-->
            <div class="main_menu col-lg-3 col-md-4 col-sm-3 hidden-xs pull-right">
                <img src="img/site_logo.png" alt="">

                <div class="panel-group">
                    <a class="main_menu_link" href="index.php"><span class="glyphicon glyphicon-home menu_link_icon"></span>الصفحة الرئيسية</a>
                </div>
                <div class="panel-group">
                    <a class="main_menu_link" href="siteinfo.php"><span class="glyphicon glyphicon-link menu_link_icon"></span>بيانات الموقع</a>
                </div>

                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#users" role="tab" aria-expanded="false" aria-controls="users">
                        <span class="glyphicon glyphicon-user menu_link_icon"></span>الاعضاء<span class="caret"></span>
                    </a>
                    <div id="users" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="add_users.php">إضافة عضو</a></li>
                            <li><a href="view_users.php">عرض الاعضاء</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#cats" role="tab" aria-expanded="false" aria-controls="cats">
                        <span class="glyphicon glyphicon-folder-open menu_link_icon"></span>الفئات والاقسام<span class="caret"></span>

                    </a>
                    <div id="cats" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="add_section.php">إضافة جديد</a></li>
                            <li><a href="veiw_sections.php">عرض الكل</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#addnew11" role="tab" aria-expanded="false" aria-controls="addnew11">
                        <span class="glyphicon glyphicon-edit menu_link_icon"></span>المواضييع والمقالات<span class="caret"></span>
                    </a>
                    <div id="addnew11" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="add_topic.php">إضافة جديد</a></li>
                            <li><a href="view_topics.php">عرض الكل</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#image_album" role="tab" aria-expanded="false" aria-controls="image_album">
                        <span class="glyphicon glyphicon-picture menu_link_icon"></span>البوم الصور<span class="caret"></span>
                    </a>
                    <div id="image_album" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="add_photo.php">إضافة جديد</a></li>
                            <li><a href="view_photos.php">عرض الكل</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#slide" role="tab" aria-expanded="false" aria-controls="slide">
                        <span class="glyphicon glyphicon-film menu_link_icon"></span>السلايد شو<span class="caret"></span>
                    </a>
                    <div id="slide" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="add_photo.php">إضافة جديد</a></li>
                            <li><a href="view_photos.php">عرض الكل</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#mailist" role="tab" aria-expanded="false" aria-controls="mailist">
                        <span class="glyphicon glyphicon-envelope menu_link_icon"></span>النشرة البريديه<span class="caret"></span>
                    </a>
                    <div id="mailist" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="send_new_email.php">ارسال جديد</a></li>
                            <li><a href="view_mail_messages.php">عرض الرسائل</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-group">
                    <a class="main_menu_link" href="ads_control.php"><span class="glyphicon glyphicon-text-color menu_link_icon"></span>الاعلانات</a>
                </div>

                <div class="panel-group">
                    <a class="main_menu_link" href="site_down.php"><span class="icon-cogs menu_link_icon"></span>تعطيل الموقع</a>
                </div>

            </div>
            <!--End Admin Panal Main Left Menu-->

            <!--Start Admin Panal MAin Content Right Block-->
            <div class="main_container col-lg-9 col-md-8 col-sm-9 col-xs- pull-left">
                <div class="row main_container_head">
                    <h4><span class="glyphicon glyphicon-edit"></span>إضافة موضوع او صفحة جديده </h4>
                </div>

                <div class="row control_panal_body">
                    <!--Start Admin Panal Section Description-->
                    <p class="page_desc">تستطيع إضافة موضوع جديد او صفحة جديده او موقعك من خلال المحرر ادناه</p>
                    <!--End Admin Panal Section Description-->


                    <div class="alert alert-success h5" role="alert">تمت الاضافه بنجاح</div>
                    <div class="alert alert-danger h4" role="alert"><strong>خطأ!</strong> .. لم يتم الاضافه</div>



                    <div class="admin_index">
                        <!--Start Site Main Options and Data-->
                        <div class="panel panel-default site_info">
                            <div class="panel-heading text-right h4">إضافة موضوع جديد</div>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="topic_title">عنوان الموضوع</label>
                                    <input type="text" class="form-control" id="topic_title" placeholder="عنوان الموضوع الرئيسي">
                                </div>
                                <div class="form-group">
                                    <label for="topic_meta">كلمات دلالية</label>
                                    <input type="text" class="form-control" id="topic_meta" placeholder="الكلمات الدلاليه للموضوع مفصولة بـ ،">
                                </div>
                                <div class="form-group">
                                    <label for="topic_img">صوره رئيسية</label>
                                    <input type="file" id="topic_img">
                                </div>
                                <div class="form-group">
                                    <label for="topic_editor">الموضوع</label>
                                    <textarea rows="5" class="form-control" id="topic_editor" placeholder="محتوي موضوعك">
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label>القسم</label>
                                    <select class="form-control">
                                        <option>القسم الاول</option>
                                        <option>القسم الثاني</option>
                                        <option>القسم الثالث</option>
                                    </select> 
                                </div>

                                <button type="submit" class="btn btn-default">إضافة الموضوع</button>
                                <button type="reset" class="btn btn-default">مسح البيانات</button>
                            </form>



                        </div>
                        <!--End Site Main Options and Data-->
                    </div>
                </div>
            </div>
            <!--Start Admin Panal MAin Content Right Block-->
        </div>
        <!--End Admin Panal Main Body-->


        <!--Start Footer-->
        <div class="container-fluid last-foot"></div>
        <!--End Footer-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/adminy.js"></script>
        <script src="text_editor/jquery.sceditor.bbcode.min.js"></script>


        <script>
            $(document).ready(function () {
                var initEditor = function () {
                    $("textarea").sceditor({
                        plugins: 'bbcode',
                        style: "./minified/jquery.sceditor.default.min.css"
                    });
                };
                initEditor();
            });
        </script>

    </body>
</html>