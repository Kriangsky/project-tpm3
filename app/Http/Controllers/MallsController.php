<?php

namespace App\Http\Controllers;

use App\Models\Malls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MallsController extends Controller
{
    function chooseMall(){
        $categories = Category::all();
        return view('chooseMall', compact('categories'));
    }

    function mallChosen(Request $request){
        $request->validate([
            'Name' => ['required', 'min:5'],
            'Daerah' => ['required'],
            'Email' => ['required'],
            'Image' => ['required', 'image'],
            'CategoryId' => ['required']

        ]);
    
        // function editMalls($id){
        //     $mall = Mall::find($id);
        // }


        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public'.'/'.$filename);

        Malls::create([
            'Daerah' => $request -> Daerah,
            'Name' => $request -> Name,
            'Email' => $request -> Email,
            'Image' => $filename,
            'CategoryId' => $request -> CategoryId

    
        ]);

        return redirect('/choose-mall');
    }

    function readMall(){
        $malls = Malls::paginate(5);
        return view('readMall', compact('malls'));
    }
    
    function editMalls($id){
        $mall = Malls::find($id);
        return view('editMalls', compact('mall'));
    }
   
    function updateMall(Request $request, $id){
        $request->validate([
            'Name' => ['required', 'min:5'],
            'Daerah' => ['required'],
            'Email' => ['required'],
            'Image' => ['required', 'image']
        ]);

        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public'.'/'.$filename);

        Malls::find($id)->update([
            'Daerah' => $request -> Daerah,
            'Name' => $request -> Name,
            'Email' => $request -> Email,
            'Image' => $filename
        ]);
        return redirect('/choose-mall');
    }
    function deleteMall($id){
        $mallImage = Malls::find($id)->Image;
        Malls::destroy($id);
        Storage::delete('/public'.'/'.$mallImage);
        return redirect('/choose-mall');
    }
}
