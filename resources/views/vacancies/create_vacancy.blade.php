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
        <form action="{{route('add_vacancy_item')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="header_news">Название вакансии*</label>
                <input required
                       type="text"
                       class="form-control"
                       id="header_news"
                       name="name"/>
            </div>
            <div class="form-group">
                <label for="header_news">Зарплата*</label>
                <input required
                       type="text"
                       class="form-control"
                       id="header_news"
                       name="salary"
                       placeholder="35000-90000"/>
            </div>
            <div class="form-group">
                <label for="header_news">Название компании*</label>
                <input required
                       type="text"
                       class="form-control"
                       id="header_news"
                       name="company_name"
                       @if($creator->company_name != null) value="{{$creator->company_name}}" disabled @endif/>
                @if($creator->company_name != null)
                    <input type="hidden" value="{{$creator->company_name}}" name="company_name">
                @endif
            </div>

            <div class="form-group">
                <label for="select_picker">Требуемый опыт*</label><br/>
                <select id="select_picker"
                        name="expirience"
                        class="selectpicker form-control" >
                    <option value="0"></option>
                    <option value="до 1 года">до 1 года</option>
                    <option value="от 1 до 3 лет">от 1 до 3 лет</option>
                    <option value="от 3 до 5 лет">от 3 до 5 лет</option>
                    <option value="от 5 до 10 лет">от 5 до 10 лет</option>
                    <option value="10 лет и более">10 лет и более</option>
                </select>
            </div>

            <div class="form-group">
                <label for="text_news">Описание вакансии*</label>
                <textarea required
                          class="form-control"
                          id="text_news"
                          rows="3"
                          name="description"></textarea>
            </div>
            <button style="margin-top: 10px;" type="submit" class="btn btn-primary">Создать вакансию</button>
        </form>
    </div>
</div>
@endsection