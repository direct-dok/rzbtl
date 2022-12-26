@extends('layouts.app')

@section('content')
    <section class="section-frame overflow-hidden">
        <div class="wrapper">
            <div class="container py-8 py-md-10 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-1">Редактирование комментария</h1>
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
            <form action="{{ route('comment.update', ['id' => $comment->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" value="{{ $comment->author }}" class="form-control" name="author">
                    <label for="textInputExample">Автор статьи</label>
                </div>

                <div class="form-floating mb-4">
                    <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 250px"  name="content">
                        {{ $comment->content }}
                    </textarea>
                    <label for="textareaExample">Текст комментария</label>
                </div>

                <button class="btn btn-blue rounded-pill">Сохранить</button>
            </form>
        </div>
        <!-- /.container -->
    </section>
@endsection
