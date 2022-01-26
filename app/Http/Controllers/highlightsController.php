<?php

namespace App\Http\Controllers;
use DB;
use Carbon;
use Illuminate\Http\Request;

class highlightsController extends Controller
{
     public function addhighlights()
    {
        return view('add-highlights');
    }

    public function savehighlights(Request $request)
    {
        DB::table('highlights')->insert([
            'url'=>$request->url,
            'longcaption'=>$request->longcaption,
            'posttime'=>$request->posttime,
            
        ]);

        return back()->with('add_highlights','Added succesfully');
    }


    public function displayPage()
    {
        $highlights = DB::table('highlights')->get();
        return view ('highlightspage',compact('highlights'));
    
    }

    public function displayTable()
    {
        $highlights = DB::table('highlights')->get();
        return view ('update-highlights',compact('highlights'));
    
    }

    public function edithighlights($id){

        $highlight = DB::table('highlights')->where('id',$id)->first();
        return view('edit-highlights',compact('highlight'));

    }

    public function deletehighlights($id){
        DB::table('highlights')->where('id',$id)->delete();
        return back();
        
    }

    public function updatehighlights(Request $request){

        DB::table('highlights')->where('id',$request ->id)->update([
            'url'=>$request->url,
            'longcaption'=>$request->longcaption,
            'posttime'=>$request->posttime,

        ]);
        return redirect('update-highlights');
    }



    public function highlightspage()
    {
        return view('highlightspage');
    }
    
    
    

}
