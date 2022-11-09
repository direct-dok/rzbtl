@extends('layouts.app')

@section('content')
    <section class="section-frame overflow-hidden">
        <div class="wrapper">
            <div class="container py-8 py-md-10 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-1">Создание страницы</h1>
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
            <form action="{{ route('page.save') }}" method="POST">
                @csrf
                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="title">
                    <label for="textInputExample">Название страницы</label>
                </div>

                <div class="form-floating mb-4">
                    <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 250px"  name="content" required></textarea>
                    <label for="textareaExample">Содержимое страницы</label>
                </div>

                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="url">
                    <label for="textInputExample">Адрес страницы (URL, без слеша в начале)</label>
                </div>

                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="seo_title">
                    <label for="textareaExample">Title (SEO)</label>
                </div>

                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="description">
                    <label for="textareaExample">Description (SEO)</label>
                </div>

                <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="keywords">
                    <label for="textareaExample">Keywords (SEO)</label>
                </div>

                <button class="btn btn-blue rounded-pill">Сохранить</button>
            </form>
        </div>
        <!-- /.container -->
    </section>
@endsection
