@extends('layouts.layouts_posts')

@section('title', $post->seo_title)
@section('description', $post->description)
@section('keywords', $post->keywords)

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        @if (session('message_sucess'))
                            <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
                                <i class="uil uil-check-circle"></i> {{ session('message_sucess') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="post-category text-line">
                            <a href="/posts{{ $category->url }}" class="hover" rel="category">
                                {{ $category->name }}
                            </a>
                        </div>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-4">{{ $post->title }}</h1>
                        <ul class="post-meta mb-5">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $post->getDate() }}</span></li>
{{--                            <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a></li>--}}
{{--                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span> Comments</span></a></li>--}}
{{--                            <li class="post-likes"><a href="#"><i class="uil uil-heart-alt"></i>3<span> Likes</span></a></li>--}}
                        </ul>
                        <!-- /.post-meta -->
                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog single mt-n17">
                        <div class="card">
                            <figure class="card-img-top">
                                <img src="{{ $post->image }}" alt="">
                            </figure>
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                           {!! $post->content !!}
                                        </div>
                                        <!-- /.post-content -->
{{--                                        <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">--}}
{{--                                            <div>--}}
{{--                                                <ul class="list-unstyled tag-list mb-0">--}}
{{--                                                    <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill mb-0">Still Life</a></li>--}}
{{--                                                    <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill mb-0">Urban</a></li>--}}
{{--                                                    <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill mb-0">Nature</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <div class="mb-0 mb-md-2">--}}
{{--                                                <div class="dropdown share-dropdown btn-group">--}}
{{--                                                    <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                        <i class="uil uil-share-alt"></i> Share </button>--}}
{{--                                                    <div class="dropdown-menu">--}}
{{--                                                        <a class="dropdown-item" href="#"><i class="uil uil-twitter"></i>Twitter</a>--}}
{{--                                                        <a class="dropdown-item" href="#"><i class="uil uil-facebook-f"></i>Facebook</a>--}}
{{--                                                        <a class="dropdown-item" href="#"><i class="uil uil-linkedin"></i>Linkedin</a>--}}
{{--                                                    </div>--}}
{{--                                                    <!--/.dropdown-menu -->--}}
{{--                                                </div>--}}
{{--                                                <!--/.share-dropdown -->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /.post -->
                                </div>
                                <!-- /.classic-view -->
                                <hr>
                                <div class="author-info d-md-flex align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <figure class="user-avatar"><img class="rounded-circle" alt="" src="./assets/img/avatars/u5.jpg"></figure>
                                        <div>
                                            <h6><a href="#" class="link-dark">Nikolas Brooten</a></h6>
                                            <span class="post-meta fs-15">Sales Manager</span>
                                        </div>
                                    </div>
                                    <div class="mt-3 mt-md-0 ms-auto">
                                        <a href="#" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-file-alt"></i> All Posts</a>
                                    </div>
                                </div>
                                <!-- /.author-info -->
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac. Maecenas faucibus mollis interdum.</p>
                                <nav class="nav social">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                                <hr>
                                <h3 class="mb-6">You Might Also Like</h3>
                                <div class="swiper-container blog grid-view mb-16 swiper-container-0" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
                                    <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                        <div class="swiper-wrapper" id="swiper-wrapper-3f83eba54a3fbcbe" aria-live="off" style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 460px; margin-right: 30px;">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b4.jpg" alt=""><span class="bg"></span></a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="#" class="hover" rel="category">Coding</a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula tristique quis risus</a></h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                                                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.post-footer -->
                                                </article>
                                                <!-- /article -->
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 460px; margin-right: 30px;">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b5.jpg" alt=""><span class="bg"></span></a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="#" class="hover" rel="category">Workspace</a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span></li>
                                                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.post-footer -->
                                                </article>
                                                <!-- /article -->
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 460px; margin-right: 30px;">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b6.jpg" alt=""><span class="bg"></span></a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="#" class="hover" rel="category">Meeting</a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span></li>
                                                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.post-footer -->
                                                </article>
                                                <!-- /article -->
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 460px; margin-right: 30px;">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b7.jpg" alt=""><span class="bg"></span></a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="#" class="hover" rel="category">Business Tips</a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                                                    </div>
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2022</span></li>
                                                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.post-footer -->
                                                </article>
                                                <!-- /article -->
                                            </div>
                                            <!--/.swiper-slide -->
                                        </div>
                                        <!--/.swiper-wrapper -->
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                    <!-- /.swiper -->
                                    <div class="swiper-controls"><div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div></div></div>
                                <!-- /.swiper-container -->

                                @if(count($comments))
                                    <hr>
                                    <div id="comments">
                                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mb-6">
                                            <h3 class="m-0">Комментариев ({{ count($comments) }})</h3>
                                            <a href="#add_comment" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 scroll">Добавить комментарий</a>
                                        </div>
                                        <ol id="singlecomments" class="commentlist">
                                            @foreach($comments as $comment)
                                                <li class="comment">
                                                    <div class="comment-header d-md-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="comment-author">{{ $comment->author }}</h6>
                                                                <ul class="post-meta">
                                                                    <li><i class="uil uil-calendar-alt"></i>{{ $comment->created_at }}</li>
                                                                </ul>
                                                                <!-- /.post-meta -->
                                                            </div>
                                                            <!-- /div -->
                                                        </div>
                                                        <!-- /div -->
                                                    </div>
                                                    <!-- /.comment-header -->
                                                    <p>{{ $comment->content }}</p>
                                                </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                @endif
                                <!-- /#comments -->
                                <hr>
                                <h3 class="mb-3">Хотите добавить комментарий?</h3>
                                <p class="mb-7">Заполните обязательные поля помеченные звездочкой (*) в форме ниже и нажмите кнопку отправить. Все комментарии проходят модерацию, как только администратор проверит Ваш комментарий, он появится на сайте.</p>
                                <form class="comment-form" id="add_comment" action="{{ route('comment.save') }}" method="POST" >
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" name="author" placeholder="Name*" id="c-name">
                                        <label for="c-name">Ваше имя *</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <textarea name="content" class="form-control" placeholder="Comment" style="height: 150px"></textarea>
                                        <label>Комментарий *</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill mb-0">Отправить</button>
                                </form>
                                <!-- /.comment-form -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.blog -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
