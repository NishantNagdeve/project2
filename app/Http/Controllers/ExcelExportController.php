<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\studentsExport;

class ExcelExportController extends Controller
{
    public function StudentExport() 
    {
        // return Excel::download(new StudentsExport, 'Student.xlsx');
        // return (new StudentsExport)->download('Student.pdf', \Maatwebsite\Excel\Excel::XLSX);
        return (new StudentsExport(2020))->download('invoices.xlsx');
    }

}
