<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function addVacancyView(){
        $title = "Создать вакансию";
        return view('vacancies.create_vacancy', [
            'title' => $title
        ]);
    }
}
