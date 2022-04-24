@extends('mail.index')
@section('includes')
    <title>Отправленные письма</title>
@endsection
@section('content')
    <div class="container" style="width: 80%; min-height: 500px;">
        <a style="margin-bottom: 15px; margin-right: 15px;" class="btn btn-primary" href="{{route('my_mails')}}">Назад</a>
        <a style="margin-bottom: 15px;" class="btn btn-primary" href="{{route('unread_mail')}}">Непрочитанные</a>
        {{$mail->links('paginator.paginate')}}
        @foreach($mail as $letter)
            <div class="card" style="margin-top:10px;" id="{{$letter->id}}" onclick="openMailModal(id)">
                <h5 style="display: flex;justify-content: space-between;" class="card-header">Кому: {{$letter['recipientObject']->first_name}} {{$letter['recipientObject']->last_name}} {{$letter['recipientObject']->company_name}}

                    <span>{{beautyDate($letter->created_at)}}</span></h5>
                <div class="card-body">
                    <h5 class="card-title">{{$letter->subject}}</h5>
                    <p class="card-text">{{$letter->mail_text}}</p>
                    <a href="#" class="btn btn-primary">Прочитать</a>
                </div>
            </div>
        @endforeach
        {{$mail->links('paginator.paginate')}}
        @if(count($mail) == 0)
            <div style="border-radius: 15px;padding: 15px;margin-bottom: 15px;text-align: center;">
                Вы не отправили ни одного письма.
            </div>
        @endif
    </div>
    @include('mail.mail_modal')
@endsection
@section('scripts')
@endsection
