<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phone_num = trim($_POST["phone_num"]);

        if (empty($phone_num)) {
            http_response_code(400);
            echo "خطا! شماره تلفنی وارد نشده است.";
            exit;
        }
        if(strlen($phone_num) < 10) {
            http_response_code(400);
            echo "خطا! شماره تلفن باید در فرمت ۱۰ رقمی وارد شود..";
            exit;
        }
        
        http_response_code(200);
        echo "شماره تلفن معتبر است!";

    } else {
        http_response_code(403);
        echo "ارسال درخواست با مشکل مواجه شد! لطفا بعدا دوباره امتحان کنید.";
    }

?>