@extends('enterviews.index')
@section('title')
    <title>{{ $title }}</title>
@endsection
@section('content')
<div>
    <form method="POST" action="{{route('auth')}}" class="form">
        @csrf
        <div id="container" class="container">
            <h1>Авторизация</h1>
            <div class="input-form">
                <input name="login" type="text" placeholder="Логин"  value="{{old('login', '')}}"/>
            </div>
            <div class="input-form">
                <input name="password" type="password" placeholder="Пароль" value="{{old('password', '')}}" />
                <a class="register_link" href="{{route('register')}}">Зарегистрироваться</a>
            </div>
            <button class="btn_submit" type="submit">Войти</button>
        </div>
    </form>
</div>
@endsection
