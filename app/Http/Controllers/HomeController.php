<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $news = Article::select('*')->orderBy('created_at', 'desc')->paginate(5);
        foreach ($news as $article){
            $timestamp = strtotime($article->created_at);
            $published = date('d.m.Y H:i', $timestamp);
            $article->news_created = $published;
        }
        return view('news.index', [
            'news' => $news
        ]);
    }

    public function addNews(){
        // тут передавать только новости автора
        return view('news.add');
    }

    public function addNewsItem(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedFields = Validator::make($request->all(), [
            '*' => 'required',
            'file_news' => 'required|image'
        ]);
        if ($validatedFields->fails()) {
            return redirect()->back()->withErrors($validatedFields)
                ->withInput();
        }
        $header = $request->get('header_news');
        $text = $request->get('text_news');
        $filePath = $request->file('file_news')->store('uploads', 'public');
        Article::create([
            'author_id' => Auth::id(),
            'header' => $header,
            'article_text' => $text,
            'image_url' => $filePath
        ]);
        return redirect()->back()->with('success', 'Новость успешно добавлена');
    }
}
