<?php

namespace App\Http\Controllers;

use App\Models\FavVacs;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VacancyController extends Controller
{
    public function addVacancyView(){
        $creator = auth()->user();
        $vacs = $creator->vacancies()->withTrashed()->orderBy('created_at', 'desc');
        $vacsCount = $vacs->count();
        $vacs = $vacs->paginate(8);
        return view('vacancies.create_vacancy',[
            'formTitle' => 'Добавить вакансию',
            'creator' => $creator,
            'vacs' => $vacs,
            'vacCount' => $vacsCount
        ]);
    }

    public function addVacancyToTable(Request $request){
        $validatedFields = Validator::make($request->all(), [
            '*' => 'required',
        ]);

        if($request->get('expirience') == "0"){
            return redirect()->back()->withErrors('Некорректно заполнено поле "Требуемый опыт"')
                ->withInput();
        }

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
        $isThisAFavoriteVacancie = FavVacs::where('vac_id', '=', $id)
        ->where('user_id', '=', \auth()->id())
        ->count();
        $isCreator = $vac->author_id == \auth()->id();
        $vac->is_creator = $isCreator;
        return response()->json([
            'vacancy' => $vac,
            'is_favorite' => $isThisAFavoriteVacancie
        ]);
    }

    public function showVacancies(){
        $vacs = Vacancy::where('id', '>', 0)->orderBy('created_at', 'desc')->paginate(8);
        $favvacs = Auth::user()->favvacs()->get()->toArray();
        return view('vacancies.catalog',
        [
            'vacancies' => $vacs,
            'favs' => $favvacs
        ]);
    }

    public function makeFav(Request $request){
        $id = $request->get('id');
        $userId = \auth()->id();
        $vac = DB::table('favorite_vacancies')->where('vac_id', '=', $id)
            ->where('user_id', '=', $userId)
            ->count();

        if($vac != 0){
            return response()->json([
                'status' => 'exists'
            ]);
        }
        DB::table('favorite_vacancies')->insert([
            'user_id' => $userId,
            'vac_id' => $id
        ]);
        return response()->json([
            'status' => 200
        ]);
    }

    public function makeUnfav(Request $request){
        $id = $request->get('id');
        $userId = \auth()->id();
        $vac = DB::table('favorite_vacancies')->where('vac_id', '=', $id)
            ->where('user_id', '=', $userId)
            ->count();

        if($vac == 0){
            return response()->json([
                'status' => 'deleted'
            ]);
        }
        DB::table('favorite_vacancies')
            ->where('user_id', '=', $userId)
            ->where('vac_id', '=', $id)
            ->delete();
        return response()->json([
            'status' => 200
        ]);
    }

    public function updateVacancy(Request $request){
        $authorId = \auth()->id();
        $vac = new Vacancy();
        $vac->name = $request->name;
        $vac->salary = $request->salary;
        $vac->company_name = $request->company_name;
        $vac->description = $request->description;
        $vac->expirience = $request->expirience;

        $updateVac = Vacancy::where('author_id', '=', $authorId)
            ->where('id', '=', $request->get('vacancyId'))
            ->update([
                'name' => $vac->name,
                'salary' => $vac->salary,
                'company_name' => $vac->company_name,
                'description' => $vac->description,
                'expirience' => $vac->expirience,
            ]);
        return response()->json(['status' => 200]);
    }

    public function favList(){
        $vacancies = Auth::user()->favvacs()->orderBy('created_at', 'desc');
        $vacsCount = $vacancies->count();
        $vacancies = $vacancies->paginate(5);
        return view('vacancies.favorites',
        [
            'vacancies' => $vacancies,
            'vacsCount' => $vacsCount
        ]);
    }
}
