@extends('layouts.panel.main')

@section('page-title', "پنل مدیریت کاربرها")
@section('panel-title', 'مدیریت کاربران')

@section('content-right')

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
