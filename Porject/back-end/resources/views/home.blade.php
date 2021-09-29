@extends('layouts.front.main')

@section('content')
    <main>
        <div class="container posts-container">
            <div class="row">
                @foreach($posts as $post)

                    <div class="col-12 mb-5 col-md-6 col-lg-4">
                        <div class="card post" data-aos="zoom-in">
                            <div class="post-img">
                                <img class="card-img-top" src="{{route('home')}}/assets/img/post.jpg"
                                     alt="Card image cap">
                                <div class="overlay"></div>
                            </div>
                            <div class="post-info">
                                <div class="post-info-box right animate__animated animate__fadeInUp animate__faster">
                                    <i class="far fa-eye"></i>
                                    <span>312</span>
                                </div>
                                <img src="{{route('home')}}/assets/img/profile.jpg" class="article-writer" alt=""
                                     data-toggle="tooltip"
                                     data-placement="top" title="عباس مهربانیان">
                                <div class="post-info-box left animate__animated animate__fadeInUp animate__faster">
                                    <i class=" far fa-comments"></i>
                                    <span>21</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">{{$post->content}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 mb-5 col-md-6 col-lg-4">
                    <div class="card post" data-aos="zoom-in">
                        <div class="post-img">
                            <img class="card-img-top" src="{{route('home')}}/assets/img/post.jpg" alt="Card image cap">
                            <div class="overlay"></div>
                        </div>
                        <div class="post-info">
                            <div class="post-info-box right animate__animated animate__fadeInUp animate__faster">
                                <i class="far fa-eye"></i>
                                <span>312</span>
                            </div>
                            <img src="{{route('home')}}/assets/img/profile.jpg" class="article-writer" alt=""
                                 data-toggle="tooltip"
                                 data-placement="top" title="عباس مهربانیان">
                            <div class="post-info-box left animate__animated animate__fadeInUp animate__faster"
                            ">
                            <i class=" far fa-comments"></i>
                            <span>21</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            یک عنوان تستی برای این مطلب
                            <span class="badge free-badge">رایگان!</span>
                        </h5>
                        <p class="card-text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                            فعلی...
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <nav aria-label="صفحه">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link">...</a></li>
                <li class="page-item"><a class="page-link" href="#">12</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </li>
            </ul>
        </nav>
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
