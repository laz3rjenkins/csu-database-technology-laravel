@extends('vacancies.index')

@section('includes')
    <title>Создать вакансию</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/headers.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />-->
@endsection
@section('scripts')
    <script type="text/javascript">
        function someFunc(){
            console.log('created');
        }
        someFunc();
    </script>
@endsection
@section('content')
<div style="width: 80%; min-height: 500px;" class="container">
    <div class="row">
        @if(count($errors) > 0)
            <div style="background: #f20c0c;border-radius: 15px;padding: 15px;margin-bottom: 15px;">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        @if(session()->has('success'))
            <div style="background: rgba(37,229,8,0.4);border-radius: 15px;padding: 15px;margin-bottom: 15px;">
                {{session()->get('success')}}
            </div>
        @endif
        <h3>{{$formTitle}}</h3>
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="header_news">Название компании*</label>
                <input required type="text" class="form-control" id="header_news" name="header_news"/>
            </div>

            <div class="form-group">
                <label for="text_news">Описание*</label>
                <textarea required class="form-control" id="text_news" rows="3" name="text_news"></textarea>
            </div>
            <div class="form-group">
                <label for="file_news">Картинка*</label>
                <input required type="file" class="form-control" id="file_news" accept="image/png, image/jpeg" name="file_news" />
            </div>
            название вакансии
            зп
            название компании
            требуемый опыт работы
            описание вакансии
            <button style="margin-top: 10px;" type="submit" class="btn btn-primary">Опубликовать новость</button>
        </form>
    </div>
</div>
@endsection
