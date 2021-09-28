@extends('layouts.panel.main')
@section('page-title', 'افزودن کاربر')
@section('panel-title', 'افزودن کاربر جدید')

@section('content-right')
    <h5>شروع کنید! :)</h5>
    @include('partials.notifications')
    @include('partials.errors')
    <form action="" method="POST">
        <div class="form-group">
            @csrf
            <label>نام:</label>
            <input name="name" value="{{old('name', isset($user) ? $user->name : '')}}" type="text" class="form-control">
            <label>ایمیل:</label>
            <input name="email" value="{{old('email', isset($user) ? $user->email : '')}}" type="email" class="form-control">
            <label>پسورد:</label>
            <input name="password" value="" type="text" class="form-control"> {{--type:password--}}

            {{--Ex: selected based on old|$user->role --}}
            <label>نقش کاربر:</label>
            <select name="role" class="form-control">
                <option value="3">کاربر معمولی</option>
                <option value="2">نویسنده</option>
                <option value="1">مدیر کل</option>
            </select>
            <label>کیف پول</label>
            <input name="wallet" value="0" type="number" class="form-control">
            <label>معرفی مختصر:</label>
            <textarea name="bio" cols="30" rows="5" class="form-control"></textarea>
            <br>
            <button class="btn btn-success">ثبت کاربر</button>
        </div>
    </form>
@endsection
