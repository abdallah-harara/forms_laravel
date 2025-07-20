<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller
{
    function form1()
    {
        return view('forms.form1');
    }
    function form1_data(Request $request)
    {

        $request->validate([
            "first_name" => 'required',
            "last_name" => 'required',
            "dob" => 'required|before:today',
            "email" => 'required',
            "password" => 'required',
            "gender" => 'required',
            "education_level" => 'required',
            "hobbies" => 'required',
            "bio" => 'required'
        ]);
        dd($request->all());
    }

    function form2()
    {
        return view('forms.form2');
    }
    function form2_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image'
        ]);
        $folderName = date('Y/m');
        $ex = $request->file('image')->getClientOriginalExtension();
        $imgname = rand() . '_' . rand() . "_" . time() . $ex;
        // $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images/' . $folderName), $imgname);
        // dd($request->all());

    }
    function form3()
    {
        return view('forms.form3');
    }
    function form3_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required'
        ]);
        $folderName = date('Y/m');
        foreach ($request->image as $img) {
            $ex = $img->getClientOriginalExtension();
            $imgname = rand() . '_' . rand() . "_" . time() . $ex;
            // $request->file('image')->getClientOriginalName();
            $img->move(public_path('images/' . $folderName), $imgname);
        }
        dd($request->all());
    }
    function contact()
    {
        return view("forms.contact");
    }

    function contact_data(Request $request)
    {
        $request->validate([
            'name'=> 'required',

            'email'=> 'required',

            'phone'=> 'required',

            'subject'=> 'required',

            'image'=> 'nullable|image',

            'message'=> 'required',
        ]);
        Mail::to('admin@email.com')->send(new TestMail());
        dd($request->all());
    }
}
