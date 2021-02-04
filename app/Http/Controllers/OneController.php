<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OneController extends Controller
{
    public function test()
    {
        echo "this is test";
    }
    public function nhome(Request $request)
    {
        $data = array();
        $data['name'] = $request->wname;
        $data['title'] = $request->title;
        $data['note'] = $request->note;
        $note = DB::table('notes')->insert($data);
        //return response()->json($data);
        if ($note)
            return redirect()->back()->with('message', 'Successfully saved!');
        else
            return redirect()->back()->with('error', 'Error! Something wrong!');
    }
    public function mhome()
    {
        $note = DB::table('notes')->get();
        return view('home', compact('note'));
    }

    public function ndetails($i)
    {
        $unote = DB::table('notes')->where('id', $i)->first();
        return view('notedetail')->with('un', $unote);
        //return response()->json($unote);
    }

    public function ndelete($i)
    {
        $unote = DB::table('notes')->where('id', $i)->delete();
        return redirect()->back()->with('delete', 'Successfully deleted!');
    }

    public function nedit($i)
    {
        $unote = DB::table('notes')->where('id', $i)->first();
        return view('noteupdate', compact('unote'));
    }

    public function nupdate(Request $request, $i)
    {
        $data = array();
        $data['name'] = $request->wname;
        $data['title'] = $request->title;
        $data['note'] = $request->note;
        $note = DB::table('notes')->where('id', $i)->update($data);
        //return response()->json($data);
        if ($note)
            return redirect()->back()->with('message', 'Successfully updated!');
        else
            return redirect()->back()->with('error', 'Error! Something wrong!');
    }
}
