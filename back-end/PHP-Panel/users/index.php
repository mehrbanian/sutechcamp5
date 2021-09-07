<?php
require_once '../inc/admin_auth.php';
require_once '../inc/configs.php';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>لیست کاربران سایت</title>
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
                        <h4 class="card-title">مدیریت کاربران</h4>
                        <p class="card-title-desc">کاربران سایت در جدول زیر نمایش داده شده‌اند، شما می‌توانید آن‌ها را
                            مدیریت کنید.</p>

                        <?php
                        $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);
                        $result = $conn->query("SELECT id, name, email FROM users");
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
                                if ($result->num_rows == 0) {
                                    echo 'هیچ کاربری وجود ندارد.';
                                } else {
                                    ?>
                                    <tbody>
                                    <?php
                                    $row = 1;

//                                    while ($user = $result->fetch_assoc()) :
                                    while ($user = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <th scope="row"><?= $row ?></th>
                                            <td><?= $user['name'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><a href="edit.php?id=<?= $user['id'] ?>">ویرایش</a> |
                                                <a href="delete.php?id=<?= $user['id'] ?>">حذف</a></td>
                                        </tr>

                                        <?php $row++;
                                    }
                                    //endwhile;
                                    ?>
                                    </tbody>
                                <?php } //endif; ?>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">توضیحات بیشتر</h4>
                        <p class="card-title-desc">در بخش سمت راست این صفحه جدولی شامل لیست تمام کاربران موجود در سایت
                            نمایش داده شده است. شما می‌توانید آن‌ها را مشاهده، ویرایش یا حذف کنید.</p>
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

<?php include '../inc/footer.php' ?>