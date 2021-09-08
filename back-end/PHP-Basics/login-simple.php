<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فرم ورود به سایت</title>
    <style>
        body{padding:75px 50px;font-size:1.3rem}h2{text-align:center}form{border:3px solid #f1f1f1;width:350px;margin:0 auto}input[type=text],input[type=password]{width:100%;padding:12px 20px;margin:8px 0;display:inline-block;border:1px solid #ccc;box-sizing:border-box}button{background-color:#04AA6D;color:#fff;padding:14px 20px;margin:8px 0;border:none;cursor:pointer;width:100%}button:hover{opacity:.8}.container{padding:16px}
    </style>
</head>
<body>
<pre>
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])){
        if ( ($_POST['username'] == 'omid') && ($_POST['password'] == '123456')){
            echo 'خوش آمدید!';
        }else{
            echo 'نام کاربری یا رمزعبور اشتباه است.';
        }
    } else {
        echo 'باید وارد شوید.';
    }
    ?>
</pre>
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