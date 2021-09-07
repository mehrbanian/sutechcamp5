<?php
session_start();
if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] && $_SESSION['role'] == "admin"){
    header("Location: users/");
}
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username == '' || $password == '') {
        echo "وارد کردن ایمیل و رمزعبور اجباری است.";
    } else {
        require_once 'inc/configs.php';
        $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);
        $stmt = $conn->prepare("SELECT password FROM users WHERE email=?");
        $stmt->bind_param("s", $username);
        $run_status = $stmt->execute();

        if( !$run_status ){
            echo 'مشکلی در ارتباط با دیتابیس وجود دارد!';
        }elseif( ($res = $stmt->get_result())->num_rows == 0 ){
            // $res = $stmt->get_result();
            // $res->num_rows
            echo 'نام کاربری وجود ندارد!';
        }elseif($res->fetch_assoc()['password'] == md5($password)) {
            $_SESSION['isLogin'] = true;
            $_SESSION['role'] = "admin"; // ex.
            $stmt->close();
            $conn->close();
            header("Location: users/");
            exit(); // =~ die();
        }else{
            echo 'رمزعبور با ایمیل مطابقت ندارد.';
        }
        $stmt->close();
        $conn->close();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فرم ورود به سایت</title>
    <style>
        body{padding:75px 50px;font-size:1.3rem;font-family:iranSans}h2{text-align:center}form{border:3px solid #f1f1f1;width:350px;margin:0 auto}input[type=text],input[type=password]{width:100%;padding:12px 20px;margin:8px 0;display:inline-block;border:1px solid #ccc;box-sizing:border-box}button{background-color:#04AA6D;color:#fff;padding:14px 20px;margin:8px 0;border:none;cursor:pointer;width:100%}button:hover{opacity:.8}.container{padding:16px}
    </style>
</head>
<body>
<h2>ورود به سایت</h2>
<form action="" method="POST">
    <div class="container">
        <label for="usrn"><b>Username</b>
            <input id="usrn" type="text" placeholder="Enter Username" name="username" required>
        </label>

        <label for="psw"><b>Password</b>
            <input id="psw" type="password" placeholder="Enter Password" name="password" required>
        </label>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>
</form>

</body>
</html>