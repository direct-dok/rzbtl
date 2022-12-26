@extends('layouts.app')

@section('content')
    <section class="section-frame overflow-hidden">
        <div class="wrapper">
            <div class="container py-8 py-md-10 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-1">Комментарии</h1>
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Автор</th>
                        <th scope="col">Текст</th>
                        <th scope="col">Статья</th>
                        <th scope="col">Статус</th>
                        <th scope="col" style="width:170px;">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <th scope="row">{{ $comment->id }}</th>
                            <td>{{ $comment->author }}</td>
                            <td><p class="m-0">{{ $comment->content }}</p></td>
                            <td>{{ $comment->post->title }}</td>
                            <td>
                                @if($comment->approved)
                                    <span class="text-green">Размещен</span>
                                @else
                                    <span class="text-red">На проверке</span>
                                @endif
                            </td>
                            <td>
                                @if(!$comment->approved)
                                    <a href="{{ route('comment.approved.page', ['id' => $comment->id]) }}" class="btn btn-circle btn-green btn-sm"><i class="uil uil-check"></i></a>
                                @endif
                                <a href="{{ route('comment.delete.page', ['id' => $comment->id]) }}" class="btn btn-circle btn-red btn-sm"><i class="uil uil-trash-alt"></i></a>
                                <a href="{{ route('edit.comment.page', ['id' => $comment->id]) }}" class="btn btn-circle btn-sky btn-sm"><i class="uil uil-edit-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.container -->
    </section>
@endsection
