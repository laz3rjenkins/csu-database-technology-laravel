@extends('mail.index')
@section('includes')
    <title>Мои сообщения</title>
@endsection
@section('content')
    <div class="container" style="width: 80%; min-height: 500px;">
        <a style="margin-bottom: 15px;" class="btn btn-primary" href="#">Отправленные</a>
        <div class="card">
            <h5 style="display: flex;justify-content: space-between;" class="card-header">От first_name lastnaame
                <span class="badge badge-pill badge-primary" style="background-color: blue;margin-left: -60%;">Новое</span>
                <span>15.05.2001</span></h5>
            <div class="card-body">

                <h5 class="card-title">vacancy_name</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac tortor quis tellus aliquet feugiat at vel velit...</p>
                <a href="#" class="btn btn-primary">Прочитать</a>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        console.log(123);
    </script>
@endsection
