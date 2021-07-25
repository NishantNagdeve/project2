<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelExportController extends Controller
{
    //
    public function StudentExport() 
    {
        return Excel::download(new StudentExport, 'student.xlsx');
    }
}


class StudentExport implements FromCollection
{
    public function collection()
    {
        return Student::all();
    }
}
