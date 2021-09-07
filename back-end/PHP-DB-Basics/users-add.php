<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>افزودن کاربر جدید</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="assets/css/app.css" id="app-style" rel="stylesheet" type="text/css">
    <!-- Theme Color -->
    <meta name="theme-color" content="#2a3042">
</head>
<body data-layout="horizontal" data-topbar="dark">
<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-we.png" alt="" height="20">
                                </span>
                            <span class="logo-lg">
                                    <img src="assets/images/logo-we.png" alt="" height="35">
                                </span>
                        </a>
                    </div>

                    <button type="button"
                            class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                            data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="topnav">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard"
                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            پیشخوان
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            مدیریت کاربران
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                            <a href="#" class="dropdown-item">همه کاربران</a>
                                            <a href="#" class="dropdown-item">افزودن کاربر</a>
                                            <a href="#" class="dropdown-item">آمار سایت</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps"
                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            تنظیمات
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/avatar-we.jpg"
                                 alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1">سلام امید!</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i>
                                پروفایل</a>
                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge badge-success float-right">11</span><i
                                    class="bx bx-wrench font-size-16 align-middle mr-1"></i> تنظیمات</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i
                                    class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> خروج</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">مدیریت کاربران</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript:%20void(0);">پیشخوان</a></li>
                                    <li class="breadcrumb-item active">مدیریت کاربران</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">افزودن کاربر جدید</h4>
                                <p class="card-title-desc">جهت ثبت کاربر جدید بدون نیاز به تأیید هویت، از این فرم
                                    استفاده کنید:</p>

                                <?php

                                // uname, email, password, repassword

                                /*$var = null;
                                if ( $cond ){
                                    $var = '';
                                }esle{
                                    $var = 1;
                                }*/
                                //$var = $cond ? true : false ;

//                                $name = isset($_POST['uname']) ? $_POST['uname'] : '';

                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                    $name = $_POST['uname'] ?? '';
                                    //$name = isset($_POST['uname']) ? trim($_POST['uname']) : '';
                                    $email = $_POST['email'] ?? '';
                                    $pass = $_POST['password'] ?? '';
                                    $pass2 = $_POST['repassword'] ?? '';

                                    if ($name == '' || $email == '' || $pass == '' || $pass2 == '') {
                                        echo 'پر کردن همه فیلدها اجباری است.';
                                    }elseif( $pass != $pass2 ){
                                        echo 'رمزهای عبور با هم مطابقت ندارند.';
                                    }else{
                                        //DB
                                        //echo 'فرم درست است.';

                                        $conn = mysqli_connect("localhost", "root", "");
                                        if (! $conn){
                                            echo mysqli_connect_error();
                                        }
//                                        var_dump($conn);

                                        //$sql = "CREATE DATABASE webcamp";
                                        //$res = mysqli_query( $conn, $sql );

                                        /*if ( ! $res ){
                                            echo mysqli_error( $conn );
                                        }*/

                                        // sql = "CREATE TABLE `webcamp`.`users` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `email` TINYTEXT NOT NULL , `password` TEXT NOT NULL , `name` TINYTEXT NOT NULL , `role` TINYINT NOT NULL , PRIMARY KEY (`id`), UNIQUE (`id`, `email`)) ENGINE = InnoDB;"


                                        //mysqli_select_db( $conn, 'webcamp' );

                                        // add user hard code
                                        //$conn = mysqli_connect("localhost", "root", "", "webcamp");

                                        //$sql = "INSERT INTO users (email, password, name, role) VALUES('test2@gmail.com', '12345', 'تست دو', 1)";
                                        //$res = mysqli_query( $conn, $sql );

                                        mysqli_close( $conn );

                                        // $mysql == $conn
                                        $mysql = new mysqli( "localhost", "root", "", "webcamp" );
                                        //$mysql->connect_error;

                                        $sql = "INSERT INTO users (email, password, name, role) VALUES(?, ?, ?, 1)";
                                        $stmt = $mysql->prepare( $sql );

                                        $stmt->bind_param( "sss",$email, $pass, $name );
                                        $stmt->execute();

                                        echo 'کاربر با موفقیت اضافه شد.';

                                        $stmt->close();
                                        $mysql->close();


                                    }

                                }


                                ?>

                                <form class="custom-validation" action="" method="post">
                                    <div class="form-group">
                                        <label>نام</label>
                                        <input type="text" name="uname" class="form-control" required
                                               placeholder="مثل: امید رجائی">
                                    </div>

                                    <div class="form-group">
                                        <label>ایمیل</label>
                                        <div>
                                            <input type="email" name="email" class="form-control" required
                                                   placeholder="مثل: omid@rajaei.net">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>رمز عبور</label>
                                        <input type="password" name="password" class="form-control" required
                                               placeholder="رمز عبور">

                                        <input type="password" name="repassword" class="form-control" required
                                               placeholder="تکرار رمز عبور">
                                    </div>

                                    <div class="form-group mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                ثبت
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                انصراف
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">راهنمای افزودن کاربر</h4>
                                <p class="card-title-desc">پس تکمیل فرم سمت راست، کاربر مورد نظر در سایت ایجاد می‌شود.
                                    نکات زیر رو در ثبت کاربر جدید رعایت کنید:</p>
                                <ul>
                                    <li>هر ایمیل فقط برای یک کاربر قابل استفاده است.</li>
                                    <li>در تعیین نقش کاربری دقت کنید.</li>
                                    <li>از رمز عبور قوی برای کاربر استفاده کنید.</li>
                                </ul>

                                <div>
                                    <h5 class="font-size-14">نمونه رمز قوی</h5>
                                    <p>Exaa@m0ps885le</p>
                                </div>
                                <div class="mt-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script>
                            © پنل مدیریت
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                سوتک کمپ ۵
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
</div>
<!-- end container-fluid -->

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>