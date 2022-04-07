<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VacancyController extends Controller
{
    public function addVacancyView(){
        $creator = auth()->user();
        $vacs = $creator->vacancies()->withTrashed()->orderBy('created_at', 'desc')->get();
        return view('vacancies.create_vacancy',[
            'formTitle' => 'Добавить вакансию',
            'creator' => $creator,
            'vacs' => $vacs
        ]);
    }

    public function addVacancyToTable(Request $request){
        $validatedFields = Validator::make($request->all(), [
            '*' => 'required',
        ]);

        if ($validatedFields->fails()) {
            return redirect()->back()->withErrors($validatedFields)
                ->withInput();
        }

        $vacancy = new Vacancy();
        $author_id = Auth::id();
        $vacancy->author_id = $author_id;
        $vacancy->company_name = $request->company_name;
        $vacancy->salary = $request->salary;
        $vacancy->name = $request->name;
        $vacancy->expirience = $request->expirience;
        $vacancy->description = $request->description;
        Vacancy::create($vacancy->toArray());

        return redirect()->back()->with('success', 'Вакансия успешно добавлена в каталог!');;
    }

    public function deleteVacancy($id){
        Vacancy::find($id)->delete();
        return response()->json(['status' => 'success']);
    }
}
