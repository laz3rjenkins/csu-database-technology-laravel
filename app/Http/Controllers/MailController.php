<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class MailController extends Controller
{
    public function index(){
        return view('mail.mymailbox');
    }

    public function sendMailView(Request $request){
        $vacancyId = $request->get('vacancy_id');
        $jobgiverId = $request->get('jobgiver_id');

        $jobAuthor = User::where('id', $jobgiverId)->first();
        $vac = Vacancy::where('id', $vacancyId)->first();

        //dd($vac, $jobAuthor);
        return view('mail.mailform', [
            'vac' => $vac,
            'company' => $jobAuthor
        ]);
    }

    /*поля у модели будут
    айди, айди автора письма, айди получателя, текст письма, тема, таймстампсы, прочитано или нет
    свзять их по полученные.отправленные как один ко многим
    */
    public function sendMail(Request $request){
        dd($request->all());
    }
}
