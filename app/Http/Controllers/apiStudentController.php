<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Crypt;

class apiStudentController extends Controller
{
    //
    public function create(Request $req)
    {
        $student = new Student;
        $student->fname = $req->input('fname');
        $student->lname = $req->input('lname');
        $student->email = $req->input('email');
        $student->password = Crypt::encrypt($req->input('password'));
        $student->save();
        return response()->json($student);

    }

    public function show()
    {
        $student = Student::all();
        return response()->json($student);
    }

    public function showById($id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }

    public function update(Request $req, $id)
    {
        $student = Student::find($id);
        $student->fname = $req->input('fname');
        $student->lname = $req->input('lname');
        $student->email = $req->input('email');
        $student->password = Crypt::encrypt($req->input('password'));
        $student->save();
        return response()->json($student);

    }

    public function delete(Request $req, $id)
    {
        $student = Student::find($id)->delete();
        // $student->delete();
        return response()->json($student);
        // return "Record Deleted";
    }
}
