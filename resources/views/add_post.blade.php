@extends('layouts.app')


@section('content')
    <section class="section-frame overflow-hidden">
        <div class="wrapper">
            <div class="container py-8 py-md-10 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-1">Создание статьи</h1>
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
            <form action="{{ route('posts.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" name="title">
                    <label for="textInputExample">Название статьи</label>
                </div>

                <div class="form-floating mb-4">
                    <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 70px"  name="preview"></textarea>
                    <label for="textareaExample">Превью статьи</label>
                </div>

                <div class="form-floating mb-4">
                    <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 250px"  name="content"></textarea>
                    <label for="textareaExample">Превью статьи</label>
                </div>

                <div class="mb-4">
                    <input id="textInputExample" type="file" class="form-control" name="image">
                </div>

                <div class="form-select-wrapper mb-4">
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected>Выберите категорию</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" name="url">
                    <label for="textInputExample">Адрес страницы (URL, со слешем в начале)</label>
                </div>

                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" name="seo_title">
                    <label for="textareaExample">Title (SEO)</label>
                </div>

                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" name="description">
                    <label for="textareaExample">Description (SEO)</label>
                </div>

                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" name="keywords">
                    <label for="textareaExample">Keywords (SEO)</label>
                </div>

                <button class="btn btn-blue rounded-pill">Сохранить</button>
            </form>
        </div>
        <!-- /.container -->
    </section>
@endsection
