<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $students =Student::where('userId',$id)->orderBy("id","desc")->paginate(5);
         return view("show", ["students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id =auth()->user()->id;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'mobile' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'file_upload' => 'required',
            'photo_upload' => 'required',
        
        ]);
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'mobile' => $request->mobile,
            'date' => $request->date,
            'gender' => $request->gender,
            'city' => $request->city,
            'file_upload' => $request->file_upload,
            'photo_upload' => $request->photo_upload,
            'userId' => $id
            
        ]);
        if($student){
            return redirect("students")->with("studentAdd","Student detail has been added successfully");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view("edit", ["student" => $student]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->mobile = $request->mobile;
        $student->date = $request->date;
        $student->gender = $request->gender;
        $student->city = $request->city;
        $student->file_upload = $request->file_upload;
        $student->photo_upload = $request->photo_upload;
        if($student->save()){
            return redirect("students")->with("studentAdd","Student detail has been updated successfully");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student =Student::find($id);
        if($student->delete()){
            return redirect("students")->with("studentAdd", "Student detail has been deleted successfully");
            
        }
    }
}
