<?php
require_once '../configs.php';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>لیست کاربران سایت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost/webcamp/admin/assets/images/favicon.ico">
    <!-- Bootstrap Css -->
    <link href="http://localhost/webcamp/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="http://localhost/webcamp/admin/assets/css/app.css" id="app-style" rel="stylesheet" type="text/css">
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
                                    <img src="http://localhost/webcamp/admin/assets/images/logo-we.png" alt="" height="20">
                                </span>
                            <span class="logo-lg">
                                    <img src="http://localhost/webcamp/admin/assets/images/logo-we.png" alt="" height="35">
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
                            <img class="rounded-circle header-profile-user" src="http://localhost/webcamp/admin/assets/images/avatar-we.jpg"
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
                                <h4 class="card-title">مدیریت کاربران</h4>
                                <p class="card-title-desc">کاربران سایت در جدول زیر نمایش داده شده‌اند، شما می‌توانید آن‌ها را مدیریت کنید.</p>

                                <?php

                                $conn = new mysqli( $db_hostname, $db_username, $db_password, $db_database );
                                $result = $conn->query("SELECT name, email FROM users");

                                //$users  = $result->fetch_array();
                                //$users  = $result->fetch_row();
                                //$users  = $result->fetch_all();
                                //$users  = $result->fetch_assoc();
                                //echo $result->num_rows;

                                /*echo '<pre style="direction:ltr;text-align:left;color:blue">';
                                var_dump($users);
                                echo '</pre>';*/
                                ?>

                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">

                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام</th>
                                            <th>ایمیل</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <?php
                                        if ($result->num_rows == 0){
                                            echo 'هیچ کاربری وجود ندارد.';
                                        }else{
                                            // echo '<tbody>';
                                            // //
                                            // echo '</tbody></table>';
                                        ?>
                                        <tbody>
                                        <?php
                                        $users  = $result->fetch_all();
                                        $row = 1;
                                        foreach ($users as $user){
                                            echo '<tr><th scope="row">'. $row .'</th><td>';
                                            echo $user[0] . '</td><td>';
                                            echo $user[1] . '</td><td>';
                                            echo '<a href="#">ویرایش</a> | <a href="#">حذف</a></td></tr>';
                                            $row++;
                                        }
                                        ?>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">توضیحات بیشتر</h4>
                                <p class="card-title-desc">در بخش سمت راست این صفحه جدولی شامل لیست تمام کاربران موجود در سایت نمایش داده شده است. شما می‌توانید آن‌ها را مشاهده، ویرایش یا حذف کنید.</p>
                                <ul>
                                    <li>نکته یک</li>
                                    <li>نکته دو</li>
                                    <li>نکته سه</li>
                                </ul>

                                <div>
                                    <a href="add.php" style="color:#5e60c5">> افزودن کاربر جدید</a>
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
<script src="http://localhost/webcamp/admin/assets/libs/jquery/jquery.min.js"></script>
<script src="http://localhost/webcamp/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>