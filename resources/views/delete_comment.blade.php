@extends('layouts.app')

@section('content')
    <section class="section-frame overflow-hidden">
        <div class="wrapper">
            <div class="container py-8 py-md-10 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-1">Удалить комментарий?</h1>
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
            <div class="alert alert-danger alert-icon" role="alert">
                <i class="uil uil-times-circle"></i> Вы уверены что хотите удалить комментарий?
            </div>
            <p>{{ $comment->content }}</p>
            <form action="{{ route('comment.delete', ['comment' => $comment->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-red rounded-pill">Удалить</button>
            </form>
        </div>
        <!-- /.container -->
    </section>
@endsection
