@extends('layouts.panel.main')

@section('page-title', "پنل مدیریت کاربرها")
@section('panel-title', 'مدیریت کاربران')

@section('content-right')
    <h4 class="card-title">مدیریت کاربران</h4>
    <p class="card-title-desc">کاربران سایت در جدول زیر نمایش داده شده‌اند، شما می‌توانید آن‌ها را
        مدیریت کنید.</p>

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
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>امید</td>
                <td>ر</td>
                <td><a href="#">ویرایش</a> |
                    <a href="#">حذف</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>غزل</td>
                <td>کبیری</td>
                <td><a href="#">ویرایش</a> |
                    <a href="#">حذف</a></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('content-left')
    <h4 class="card-title">توضیحات بیشتر</h4>
    <p class="card-title-desc">در بخش سمت راست این صفحه جدولی شامل لیست تمام کاربران موجود در سایت
        نمایش داده شده است. شما می‌توانید آن‌ها را مشاهده، ویرایش یا حذف کنید.</p>
    <ul>
        <li>نکته یک</li>
        <li>نکته دو</li>
        <li>نکته سه</li>
    </ul>

    <div>
        <a href="#" style="color:#5e60c5">> افزودن کاربر جدید</a>
    </div>
    <div class="mt-4">

    </div>
@endsection
