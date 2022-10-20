@extends('layouts.app')

@section('content')
    <section class="section-frame overflow-hidden">
        <div class="wrapper">
            <div class="container py-8 py-md-10 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-1">Страницы сайта</h1>
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
                @foreach($pages as $page)
                    <tr>
                        <th scope="row">{{ $page->id }}</th>
                        <td>{{ $page->title }}</td>
                        <td><a href="/{{ $page->url }}" target="_blank">{{ $page->title }}</a></td>
                        <td>
                            <a href="{{ route('page.delete', ['pg' => $page->id]) }}" class="btn btn-yellow rounded-pill">Удалить</a>
                            <a href="{{ route('page.edit', ['pg' => $page->id]) }}" class="btn btn-orange rounded-pill">Изменить</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.container -->
    </section>
@endsection
