@extends('layouts.layouts_posts')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-14 mb-9 text-center">
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                    <h1 class="display-1 mb-3">Блог</h1>
                    <p class="lead px-lg-5 px-xxl-8">Здесь мы публикуем самые интересные статьи нашей компании</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- /.blog -->
                    <div class="blog grid grid-view">
                        <div class="row isotope gx-md-8 gy-8 mb-8">

                            @foreach($posts as $post)
                                <article class="item post col-md-6">
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay-1 hover-scale">
                                            <a href="/post{{ $categories[$post->category_id]['url'] }}{{ $post->url }}">
                                                <img src="{{asset($post->image)}}">
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Читать далее</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="{{ $categories[$post->category_id]['url'] }}" class="hover" rel="category">{{ $categories[$post->category_id]['name'] }}</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3">
                                                    <a
                                                        class="link-dark"
                                                        href="/post{{ $categories[$post->category_id]['url'] }}{{ $post->url }}"
                                                    >
                                                        {{ $post->title }}
                                                    </a>
                                                </h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <p>{{ $post->preview }}</p>
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $post->getDate() }}</span></li>
{{--                                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>--}}
{{--                                                <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>--}}
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                            @endforeach

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.blog -->
{{--                    <nav class="d-flex" aria-label="pagination">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item disabled">--}}
{{--                                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                    <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Next">--}}
{{--                                    <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- /.pagination -->--}}
{{--                    </nav>--}}
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
