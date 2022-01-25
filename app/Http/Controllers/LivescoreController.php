<?php

namespace App\Http\Controllers;
use App\Models\Livescore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;

class LivescoreController extends Controller
{
    public function addLivescore()
    {
        return view('admin_livescore');
    }
    public function saveLivescore(Request $request)
    {
        DB::table('livescores')->insert([
            'Livescore' => $request->Livescore,
            'Team1' => $request->Team1,
            'Score1' => $request->Score1,
            'Team2' => $request->Team2,
            'Score2' => $request->Score2,
        ]);
        return back()->with('success', 'Livescore added succesfully');
    }
    public function livescoreList()
    {
        $livescores = DB::table('livescores')->get();
        return view('livescore-list',compact('livescores'));
    }
    public function editLivescore($id)
    {
        $livescores = DB::table('livescores')->where('id', $id)->first();
        return view('edit-livescore', compact('livescores'));
    }
    public function updateLivescore(Request $request)
    {
        DB::table('livescores')->where('id', $request->id)->update([
            'Livescore' => $request->Livescore,
            'Team1' => $request->Team1,
            'Score1' => $request->Score1,
            'Team2' => $request->Team2,
            'Score2' => $request->Score2,
        ]);
        return redirect('livescore-list')->with('livescore_update', 'Livescores updated succesfully');
    }
    public function deleteLivescore($id)
    {
        DB::table('livescores')->where('id', $id)->delete();
        return back()->with('livescore_delete', 'Livescores deleted succesfully');
    }
}
