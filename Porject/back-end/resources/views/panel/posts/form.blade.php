@extends('layouts.panel.main')
@section('page-title', 'افزودن نوشته')
@section('panel-title', 'افزودن پست جدید')

@section('content-right')
    <h5>خلق کنید! :)</h5>
    @include('partials.notifications')
    @include('partials.errors')
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <label>عنوان:</label>
            <input name="title" value="{{old('title', isset($post) ? $post->title : '')}}" type="text" class="form-control">
            <label>نامک:</label>
            <input name="slug" value="{{old('slug', isset($post) ? $post->slug : '')}}" type="text" class="form-control">
            <label>دسته‌بندی:</label>
            <select name="category_id" class="form-control">
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            {{--Ex: radio: type (reg/vip) --}}
            <input name="type" value="1" hidden type="text">
            <label>محتوا:</label>
            <textarea name="content" cols="30" rows="5" class="form-control">{{old('content', isset($post) ? $post->content : '')}}</textarea>
            <label>تصویر شاخص:</label>
            <input name="thumbnail" type="file" required class="form-control">
            <br>
            <input name="user_id" value="1" hidden type="text">
            <button class="btn btn-success">ثبت نوشته</button>
        </div>
    </form>
@endsection
