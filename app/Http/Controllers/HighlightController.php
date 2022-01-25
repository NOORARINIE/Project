<?php

namespace App\Http\Controllers;

use App\Models\Highlights;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function highlights()
    {
        return view('highlights');
    }

    public function addHighlight()
    {
        return view('admin_highlights');
    }
    public function saveHighlight(Request $request)
    {
        DB::table('highlights')->insert([
            'highlights' => $request->highlights,
            'title' => $request->title,
            'times' => $request->times,
            'video' => $request->video,
        ]);
        return back()->with('success', 'Highlights added succesfully');
    }
    public function highlightList()
    {
        $highlights = DB::table('highlights')->get();
        return view('highlights-list',compact('highlights'));
    }
    public function editHighlight($id)
    {
        $highlight = DB::table('highlights')->where('id', $id)->first();
        return view('edit-highlights', compact('highlight'));
    }
    public function updateHighlight(Request $request)
    {
        DB::table('highlights')->where('id', $request->id)->update([
            'highlights' => $request->highlights,
            'title' => $request->title,
            'times' => $request->times,
            'video' => $request->video,
        ]);
        return redirect('highlights-list')->with('highlight_update', 'Highlight updated succesfully');
    }
    public function deleteHighlight($id)
    {
        DB::table('highlights')->where('id', $id)->delete();
        return back()->with('highlight_delete', 'Highlight deleted succesfully');
    }
}
