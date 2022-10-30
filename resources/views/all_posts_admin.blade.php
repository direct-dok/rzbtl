@extends('layouts.app')

@section('content')
    <section class="section-frame overflow-hidden">
        <div class="wrapper">
            <div class="container py-8 py-md-10 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-1">Посты в блоге</h1>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>
    <section class="wrapper bg-light">
        <div class="container py-8 py-md-10">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Ссылка</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td><a href="/post{{ $categories[$post->category_id]['url'] }}{{ $post->url }}" target="_blank">Посмотреть</a></td>
                        <td>
                            <a href="{{ route('page.delete', ['pg' => $post->id]) }}" class="btn btn-circle btn-red btn-sm"><i class="uil uil-trash-alt"></i></a>
                            <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn btn-circle btn-sky btn-sm"><i class="uil uil-edit-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.container -->
    </section>
@endsection
