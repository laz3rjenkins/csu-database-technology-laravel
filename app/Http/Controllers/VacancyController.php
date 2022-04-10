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

    public function getVacById($id){
        $vac = Vacancy::where('id', '=', $id)->first();
        $isCreator = $vac->author_id == \auth()->id();
        $vac->is_creator = $isCreator;
        return response()->json(['vacancy' => $vac]);
    }

    public function showVacancies(){
        $vacs = Vacancy::where('id', '>', 0)->orderBy('created_at', 'desc')->paginate(8);
        return view('vacancies.catalog',
        [
            'vacancies' => $vacs
        ]);
    }
}
