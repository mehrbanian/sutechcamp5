<?php
require_once '../inc/admin_auth.php';
require_once '../inc/configs.php';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>افزودن کاربر جدید</title>
    <?php include '../inc/head.php' ?>
    </head>
<body data-layout="horizontal" data-topbar="dark">
<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php
        include '../inc/header.php';
        $panel_title = "مدیریت کاربران";
        include '../inc/panel-top.php';
        ?>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">افزودن کاربر جدید</h4>
                        <p class="card-title-desc">جهت ثبت کاربر جدید بدون نیاز به تأیید هویت، از این فرم
                            استفاده کنید:</p>

                        <?php

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                            $name = $_POST['uname'] ?? '';
                            //$name = isset($_POST['uname']) ? trim($_POST['uname']) : '';
                            $email = $_POST['email'] ?? '';
                            $pass = $_POST['password'] ?? '';
                            $pass2 = $_POST['repassword'] ?? '';

                            if ($name == '' || $email == '' || $pass == '' || $pass2 == '') {
                                echo '<div class="alert alert-danger">پر کردن همه فیلدها اجباری است.</div>';
                            } elseif ($pass != $pass2) {
                                echo '<div class="alert alert-danger">رمزهای عبور با هم مطابقت ندارند.</div>';
                            } else {
                                // insert to DB

                                $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

                                $sql = "INSERT INTO users (email, password, name, role) VALUES(?, ?, ?, 1)";
                                $stmt = $conn->prepare($sql);

                                $pass = md5($pass);
                                $stmt->bind_param("sss", $email, $pass, $name);
                                $res = $stmt->execute();

                                if ($res)
                                    echo '<div class="alert alert-success">کاربر با موفقیت اضافه شد.</div>';
                                else
                                    echo '<div class="alert alert-warning">مشکلی در ثبت کاربر وجود دارد!<br>خطا: ' . $conn->error . '</div>';

                                $stmt->close();
                                $conn->close();
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
                                           placeholder="مثل: omid@gmail.com">
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
                            <a href="index.php" style="color:#5e60c5">> لیست کاربران</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- End Page-content -->

<?php include '../inc/footer.php' ?>