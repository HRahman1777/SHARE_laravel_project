<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function SavePost(Request $request)
    {
        $validatedData = $request->validate([
            'ptitle' => 'required|max:200',
            'picdis' => 'required',
            'photo' => 'mimes:jpeg,jpg,JPG,png,PNG | max:2000',
        ]);


        $data = array();
        $data['ptitle'] = $request->ptitle;
        $data['picdis'] = $request->picdis;
        $photo = $request->file('photo');


        if ($photo) {
            $photo_name = hexdec(uniqid());
            $ext = strtolower($photo->getClientOriginalExtension());
            $photo_full_name = $photo_name . '.' . $ext;
            $upload_path = 'frontend/uploaded/';
            $photo_url = $upload_path . $photo_full_name;
            $success = $photo->move($upload_path, $photo_full_name);
            $data['photo'] = $photo_url;
            $note = DB::table('posts')->insert($data);

            if ($note) {
                //return response()->json($note);
                return redirect()->back()->with('message', 'Successfully Post with photo saved!');
            } else {
                //return response()->json($note);
                return redirect()->back()->with('error', 'Error! Something wrong!');
            }
        } else {
            $note = DB::table('posts')->insert($data);
            if ($note) {
                //return response()->json($note);
                return redirect()->back()->with('message', 'Successfully Post with photo saved!');
            } else {
                //return response()->json($note);
                return redirect()->back()->with('error', 'Error! Something wrong!');
            }
        }
    }


    public function Allposts()
    {
        $pst = DB::table('posts')->get();
        return view('posts', compact('pst'));
    }

    public function SinglePost($i)
    {
        $spos = DB::table('posts')->where('id', $i)->first();
        return view('postdetails')->with('pos', $spos);
    }
}
