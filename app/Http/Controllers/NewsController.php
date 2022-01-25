<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews()
    {
        return view('admin_news');
    }
    public function saveNews(Request $request)
    {
        DB::table('news')->insert([
            'news' => $request->news,
            'title' => $request->title,
            'picture' => $request->picture,
        ]);
        return back()->with('success', 'News added succesfully');
    }
    public function newsList()
    {
        $news = DB::table('news')->get();
        return view('news-list',compact('news'));
    }
    public function editNews($id)
    {
        $news = DB::table('news')->where('id', $id)->first();
        return view('edit-news', compact('news'));
    }
    public function updateNews(Request $request)
    {
        DB::table('news')->where('id', $request->id)->update([
            'news' => $request->news,
            'title' => $request->title,
            'picture' => $request->picture,
        ]);
        return redirect('news-list')->with('news_update', 'News updated succesfully');
    }
    public function deleteNews($id)
    {
        DB::table('news')->where('id', $id)->delete();
        return back()->with('news_delete', 'News deleted succesfully');
    }
}
