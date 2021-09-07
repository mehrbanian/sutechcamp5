<?php
require_once '../inc/admin_auth.php';
if ( !isset($_GET['id']) ){
    header("Location: index.php");
}
require_once '../inc/configs.php';
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){

    $name = $_POST['uname'] ?? '';
    $email = $_POST['email'] ?? '';
    $pass = $_POST['password'] ?? '';

    if ($pass == ""){ // without Password Change

        $stmt = $conn->prepare("UPDATE users SET email=?, name=? WHERE id=?");
        $stmt->bind_param("ssi", $email, $name, $_GET['id']);
        $stmt->execute();

    }else{ // with Password Change

        $stmt = $conn->prepare("UPDATE users SET email=?, password=?, name=? WHERE id=?");
        $pass = md5($pass);
        $stmt->bind_param("sssi", $email, $pass, $name, $_GET['id']);
        $stmt->execute();

    }
    if ($stmt->affected_rows){
        header("Location: index.php?edited=ok");
    }else{
        header("Location: index.php?edited=no");
    }

}
// fetch user
$stmt = $conn->prepare("SELECT email, name FROM users WHERE id=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();
if ( !$result->num_rows ){
    header("Location: index.php?edited=notExists");
}
$user = $result->fetch_assoc();

?>
    <!DOCTYPE html>
    <html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <title>ویرایش کاربر</title>
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
                        <h4 class="card-title">ویرایش کاربر</h4>
                        <p class="card-title-desc">اگر نیازی به تغییر رمز کاربر نیست، فیلد پسورد را خالی رها کنید.</p>

                        <form class="custom-validation" action="" method="post">
                            <div class="form-group">
                                <label>نام</label>
                                <input type="text" name="uname" class="form-control" required
                                       placeholder="مثل: امید" value="<?= $user['name'] ?>">
                            </div>

                            <div class="form-group">
                                <label>ایمیل</label>
                                <div>
                                    <input type="email" name="email" class="form-control" required
                                           placeholder="مثل: omid@gmail.com" value="<?= $user['email'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>رمز عبور</label>
                                <input type="password" name="password" class="form-control"
                                       placeholder="رمز عبور جدید">
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