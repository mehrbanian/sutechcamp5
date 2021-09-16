@extends('layouts.panel.main')
@section('page-title', 'افزودن نوشته')
@section('panel-title', 'افزودن پست جدید')

@section('content-right')
    <h5>خلق کنید! :)</h5>

    @if(session('success'))
        <div class="alert alert-success"><p>عملیات با موفقیت انجام شد.</p></div>
    @endif


    @if( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="POST">
        <div class="form-group">
            @csrf
            <label>عنوان:</label>
            <input name="title" value="{{isset($post) ? $post->title : ''}}" type="text" class="form-control">
            <label>نامک:</label>
            <input name="slug" value="{{isset($post) ? $post->slug : ''}}" type="text" class="form-control">
            <label>محتوا:</label>
            <textarea name="content" cols="30" rows="5" class="form-control">{{isset($post) ? $post->content : ''}}</textarea>
            <br>
            <input name="image" value="test.jpg" hidden type="text">
            <button class="btn btn-success">ثبت نوشته</button>
        </div>
    </form>
@endsection
