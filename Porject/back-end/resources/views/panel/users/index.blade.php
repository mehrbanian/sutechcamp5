@extends('layouts.panel.main')

@section('page-title', 'مدیریت کاربران')
@section('panel-title', 'مدیریت کاربرها')

@section('content-right')
    <h4 class="card-title">مدیریت کاربران سایت</h4>

    <div class="table-responsive">
        <table class="table table-hover mb-0">

            <thead>
            <tr>
                <th>#</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>کیف پول</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($users))
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->wallet}}</td>
                        <td><a href="{{route('panel.users.edit', $user->id)}}">ویرایش</a> |
                            <a href="{{route('panel.users.delete', ['user'=>$user->id])}}">حذف</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
