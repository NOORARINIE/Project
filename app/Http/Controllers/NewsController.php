<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews()
    {
        return view('add-news');
    }

    public function saveNews(Request $request)
    {
        DB::table('news')->insert([
            'url'=>$request->url,
            'innercaption'=>$request->innercaption,
            'outercaption'=>$request->outercaption,
            'date'=>$request->date
        ]);

        return back()->with('add_news','Added succesfully');
    }


    public function displayPage()
    {
        $news = DB::table('news')->get();
        return view ('newspage',compact('news'));
    
    }

    public function displayTable()
    {
        $news = DB::table('news')->get();
        return view ('update-news',compact('news'));
    
    }

    public function editNews($id){

        $new = DB::table('news')->where('id',$id)->first();
        return view('edit-news',compact('new'));

    }

    public function deleteNews($id){
        DB::table('news')->where('id',$id)->delete();
        return back();
    }

    public function updateNews(Request $request){

        DB::table('news')->where('id',$request ->id)->update([
            'url'=>$request->url,
            'innercaption'=>$request->innercaption,
            'outercaption'=>$request->outercaption,
            'date'=>$request->date
        ]);
    
        return redirect('update-news');
    }






    public function newspage()
    {
        return view('newspage');
    }


    

}
