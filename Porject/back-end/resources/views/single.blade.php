@extends('layouts.front.main')
@section('title', $post->title)

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card single-post" data-aos="zoom-in">
                        <div class="post-img">
                            <img src="{{route('uploads', 'thumbnails')}}/{{$post->thumbnail}}" class="card-img-top"
                                 alt="تصویر مطلب">
                            <div class="overlay"></div>

                            <div class="post-btns">
                                <div class="post-btn" data-bs-toggle="tooltip" data-bs-placement="top"
                                     title="به اشتراک گذاری">
                                    <i class="fas fa-share-square"></i>
                                </div>

                                <a href="#" class="post-btn" data-bs-toggle="modal" data-bs-target="#rating_stars"
                                   data-bs-toggle="tooltip" data-bs-placement="top" title="امتیازدهی">
                                    <i class="fas fa-star"></i>
                                </a>
                                @include('partials.modal.rating')
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{$post->title}}</h4>
                            <div class="card-text">
                                {!! $post->the_content() !!}




                            </div>
                        </div>
                    </div>

                    <div class="card mt-4 comment-section" data-aos="zoom-in">
                        <div class="section-header">
                            <h4>دیدگاه‌ها</h4>
                            <p>یک دیدگاه برای این پست بزارید!</p>
                        </div>

                        <div class="commtent-box">
                            @auth
                                <img src="{{route('uploads', 'profiles')}}/{{auth()->user()->avatar}}" alt="" class="comment-user">
                                <div class="comment-editor">
                                    <form action="">
                                        <textarea name="comment" id="editor"></textarea>
                                        <button type="submit" class="btn btn-dark mt-3 float-end">ثبت کن!</button>
                                    </form>
                                </div>
                            @else
                            <!-- Not logged in -->
                                <p>
                                    برای ثبت دیدگاه
                                    <a href="{{route('login')}}">وارد شوید</a>
                                    و یا
                                    <a href="{{route('register')}}">یا ثبت‌نام کنید!</a>
                                </p>

                            @endauth


                        </div>

                        <div class="comments-container">
                            <div class="comment-wrapper">
                                <div class="commtent-box">
                                    <img src="{{route('home')}}/assets/img/profile.jpg" alt="" class="comment-user">
                                    <div class="comment-text">
                                        <h6 class="comment-author">عباس مهربانیان</h6>
                                        <div class="comment-date">3 روز پیش</div>
                                        <div class="content">
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                                از
                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                سطرآنچنان که
                                                لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                                                بهبود
                                                ابزارهای کاربردی می باشد.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-wrapper">
                                    <div class="commtent-box">
                                        <img src="{{route('home')}}/assets/img/profile.jpg" alt="" class="comment-user">
                                        <div class="comment-text">
                                            <h6 class="comment-author">عباس مهربانیان</h6>
                                            <div class="comment-date">3 روز پیش</div>
                                            <div class="content">
                                                <p>
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده
                                                    از
                                                    طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                    سطرآنچنان که
                                                    لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                                    هدف
                                                    بهبود
                                                    ابزارهای کاربردی می باشد.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment-wrapper">
                                        <div class="commtent-box">
                                            <img src="{{route('home')}}/assets/img/profile.jpg" alt=""
                                                 class="comment-user">
                                            <div class="comment-text">
                                                <h6 class="comment-author">عباس مهربانیان</h6>
                                                <div class="comment-date">3 روز پیش</div>
                                                <div class="content">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده
                                                        از
                                                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                        سطرآنچنان که
                                                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                                        با
                                                        هدف
                                                        بهبود
                                                        ابزارهای کاربردی می باشد.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-wrapper">
                                <div class="commtent-box">
                                    <img src="{{route('home')}}/assets/img/profile.jpg" alt="" class="comment-user">
                                    <div class="comment-text">
                                        <h6 class="comment-author">عباس مهربانیان</h6>
                                        <div class="comment-date">3 روز پیش</div>
                                        <div class="content">
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                استفاده
                                                از
                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                سطرآنچنان که
                                                لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                                با
                                                هدف
                                                بهبود
                                                ابزارهای کاربردی می باشد.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 sidebar">
                    <div class="card author" data-aos="zoom-in">
                        <img src="{{route('uploads', 'profiles')}}/{{$post->user->avatar}}" class="article-writer"
                             alt="نوسینده مطلب">
                        <h5 class="author-name">{{$post->user->name}}</h5>

                        <div class="card-body">
                            <h6 class="card-subtitle">درباره نویسنده</h6>
                            <p class="bio">{{$post->user->bio}}</p>

                            <h6 class="card-subtitle mt-4 mb-3">آمار نویسنده</h6>
                            <div class="author-stats">
                                <div class="author-stat">
                                    <span class="num">--</span>
                                    <span class="text">مطلب</span>
                                </div>
                                <div class="author-stat">
                                    <span class="num">--</span>
                                    <span class="text">امتیاز کل</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card donate" data-aos="zoom-in">
                        <h5 class="card-title">
                            <i class="fas fa-donate"></i>
                            حمایت از نویسنده
                        </h5>

                        <div class="card-text">
                            <p>
                                این مطلب رایگان بود! درصورتی که برای شما مفید بود میتوانید از نویسنده این مطلب حمایت
                                کنید.
                            </p>

                            <form action="">
                                <input type="number" name="" id="" class="form-control"
                                       placeholder="...مبلغ حمایت را وارد کنید">
                                <small class="form-error">مبلغ حمایت حداقل باید ۱۰۰۰ تومان باشد.</small>

                                <button type="button" id="pay_donation" class="blue-btn mt-3">بفرست بره!</button>
                            </form>
                        </div>

                        <div id="payment_success" class="success-overlay">
                            <div class="content">
                                <i class="fas fa-smile-wink"></i>
                                <h4>مرسی!</h4>
                                <p>براش فرستادیم!</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section-break-md"></div>
    </main>
@endsection

@section('footer')
    <script src="{{route('home')}}/assets/js/ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('#pay_donation').click(function () {
                $('#payment_success').fadeIn().css({display: 'flex'}).delay(3000).fadeOut();
            });
        });

        CKEDITOR.replace('editor');
    </script>
@endsection
