<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        $data=[
            "name"=> "Riyaj kuikel",
            "age" => 17
        ];
        return view ("welcome")-> with($data);
    }
    public function nextpage(){

        return view ("next-page");
    }
    public function profile($id,$second)
    {
        $data = [
            "id" => $id,
            "second" => $second
        ];

        return view("profile" . with($data));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new Students();
        $student ->name=$request->name;
        $student ->address=$request->address;
        $student->dob=$request->dob;
/*        $filenameWithExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension =  $request->file('img')->getClientOriginalExtension();
        $filenametostore= $filename."_".time().".".$extension;
        $img = Image::make($request->file('img'));
        $img-> save('storage/image'.$filenametostore);

        $student->img= 'storage/image'.$filenametostore;*/

        $student->save();

        return redirect('/list');

    }
    public function list(){
        $students=Students::get();
        return view ("list")->with('students',$students);
    }
}



