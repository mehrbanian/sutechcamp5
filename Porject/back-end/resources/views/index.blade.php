@extends('layouts.front.main')
@section('title', 'صفحه اصلی')

@section('content')
    <main>
        <div class="container posts-container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-12 mb-5 col-md-6 col-lg-4">
                        <a href="{{route('posts.single', $post->slug)}}">
                        <div class="card post" data-aos="zoom-in">
                            <div class="post-img">
                                <img class="card-img-top" src="{{route('uploads', 'thumbnails')}}/{{$post->thumbnail}}"
                                     alt="Card image cap">
                                <div class="overlay"></div>
                            </div>
                            <div class="post-info">
                                <div class="info-box right animate__animated animate__faster animate__fadeInUp">
                                    <i class="far fa-eye"></i>
                                    <span>{{$post->views}}</span>
                                </div>
                                <img src="{{route('uploads', 'profiles')}}/{{$post->user->avatar}}" class="article-writer" alt="نوسینده مطلب"
                                     data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $post->user->name }}">
                                <div class="info-box left animate__animated animate__faster animate__fadeInUp">
                                    <i class="far fa-comments"></i>
                                    <span>--</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}} @php echo $post->type == 1 ? '<span class="badge free-badge">رایگان!</span>' : '' @endphp</h5>
                                <p class="card-text">{{$post->excerpt()}}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>



            <nav aria-label="Page navigation example" data-aos="fade-up">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">
                            1
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            2
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">
                            ...
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            12
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="section-break"></div>
        <section class="container">
            <div class="section-title">
                <h3>داغ ترین مطالب</h3>
                <p>شما نیز این مطالب دنبال کنید!</p>
            </div>
            <div class="trending-posts">
                <div class="trending-post-wrapper">
                    <div class="trending-post"
                         style="background-image: url('{{route('home')}}/assets/img/trending-post2.jpg');">
                        <div class="overlay"></div>
                        <div class="post-texts">
                            <div class="category">نام دسته‌بندی</div>
                            <h4 class="title">این یک عنوان تستی برای این مطلب است</h4>
                        </div>
                        <div class="author-pic">
                            <img src="{{route('home')}}/assets/img/profile.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="trending-post-wrapper">
                    <div class="trending-post"
                         style="background-image: url('{{route('home')}}/assets/img/trending-post2.jpg');">
                        <div class="overlay"></div>
                        <div class="post-texts">
                            <div class="category">نام دسته‌بندی</div>
                            <h4 class="title">این یک عنوان تستی برای این مطلب است</h4>
                        </div>
                        <div class="author-pic">
                            <img src="{{route('home')}}/assets/img/profile.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="trending-post-wrapper">
                    <div class="trending-post"
                         style="background-image: url('{{route('home')}}/assets/img/trending-post2.jpg');">
                        <div class="overlay"></div>
                        <div class="post-texts">
                            <div class="category">نام دسته‌بندی</div>
                            <h4 class="title">این یک عنوان تستی برای این مطلب است</h4>
                        </div>
                        <div class="author-pic">
                            <img src="{{route('home')}}/assets/img/profile.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="trending-post-wrapper">
                    <div class="trending-post"
                         style="background-image: url('{{route('home')}}/assets/img/trending-post2.jpg');">
                        <div class="overlay"></div>
                        <div class="post-texts">
                            <div class="category">نام دسته‌بندی</div>
                            <h4 class="title">این یک عنوان تستی برای این مطلب است</h4>
                        </div>
                        <div class="author-pic">
                            <img src="{{route('home')}}/assets/img/profile.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="trending-post-wrapper">
                    <div class="trending-post"
                         style="background-image: url('{{route('home')}}/assets/img/trending-post2.jpg');">
                        <div class="overlay"></div>
                        <div class="post-texts">
                            <div class="category">نام دسته‌بندی</div>
                            <h4 class="title">این یک عنوان تستی برای این مطلب است</h4>
                        </div>
                        <div class="author-pic">
                            <img src="{{route('home')}}/assets/img/profile.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="trending-post-wrapper">
                    <div class="trending-post"
                         style="background-image: url('{{route('home')}}/assets/img/trending-post2.jpg');">
                        <div class="overlay"></div>
                        <div class="post-texts">
                            <div class="category">نام دسته‌بندی</div>
                            <h4 class="title">این یک عنوان تستی برای این مطلب است</h4>
                        </div>
                        <div class="author-pic">
                            <img src="{{route('home')}}/assets/img/profile.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-break-md"></div>
    </main>
@endsection
