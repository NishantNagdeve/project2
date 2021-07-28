<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class StudentsExport implements FromQuery, WithHeadings, WithStyles
{
    // public function collection()   // For getting all data from table
    // {
    //     return Student::all();
    // }

    // public function startCell(): string   // starts from second row
    // {
    //     return 'A2';
    // }

    use Exportable;

    public function __construct(int $year)
    {
        $this->year = $year;
    }

    public function query()
    {
        return Student::query()->whereYear('created_at', $this->year);
    }

    public function headings(): array
    {
        return [
            '#',
            'First Name',
            'Last Name',
            'Email',
            'Password',
            'Created Date',
            'Updated Date',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

            // Styling a specific cell by coordinate.
            // 'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
            // 'C'  => ['font' => ['size' => 16]],
        ];
    }

}