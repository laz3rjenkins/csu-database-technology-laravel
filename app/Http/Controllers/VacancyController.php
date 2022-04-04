<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function addVacancyView(){
        return view('vacancies.create_vacancy',[
            'formTitle' => 'Добавить вакансию'
        ]);
    }
}
