<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentGrade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = Student::all();
        return view('students.index', $data);
        //return Student::all();

       // return Student::where('province', 'Illinois')
        //->orwhere('province', 'Maryland')
        //->orwhere('lname', 'Haag')
        //->get();

        //return Student::where('fname', 'like', '%t%')->get();

        //return Student::orderBy('fname',)->get();
        //return Student::orderBy('city', 'desc')->get();
        //return Student::limit(7)->get();

        //return Student::with('grade')->get();

        //return Student::whereIn('id', [1,3,5,7,9,11])->get();
        //return Student::whereNotIn('id', [1,3,5,7,9,11])->get();

        //return Student::where('province', 'Maryland')->first();
        //return Student::with('grades')->get();

        //return Student::with(['grades' => function($query){
           // return $query->where('grade', '>=', 90);
        //}])->get();
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students,create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->fname =$request['fname'];
        $student->lname =$request['lname'];
        $student->email =$request['email'];
        $student->phone =$request['phone'];
        $student->address =$request['address'];
        $student->city =$request['city'];
        $student->province =$request['province'];
        $student->zip =$request['zip'];
        $student->birthdate =$request['birthdate'];
        $student->save();

        return redirect()->to('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return Student::find('$id');

        $student = Student::find($id);
        return $student->fullname;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //$student = Student::find($id);
        //$student->fname =$request['fname'];
        //$student->lname =$request['lname'];
        //$student->email =$request['email'];
        //$student->phone =$request['phone'];
        //$student->address =$request['address'];
        //$student->city =$request['city'];
        //$student->province =$request['province'];
        //$student->zip =$request['zip'];
        //$student->birthdate =$request['birthdate'];
        //$student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student ->delete();
        }
}
