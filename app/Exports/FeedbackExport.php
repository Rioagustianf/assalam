<?php

namespace App\Exports;

use App\Models\Feedback;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class FeedbackExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Feedback::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Email',
            'No HP',
            'Pesan',
            'Tanggal',
        ];
    }

    /**
     * @param mixed $row
     * @return array
     */
    public function map($row): array
    {
        static $rowNumber = 0;
        $rowNumber++;
        
        return [
            $rowNumber,
            $row->first_name . ' ' . $row->last_name,
            $row->email,
            $row->phone,
            $row->message,
            $row->created_at->format('d-m-Y H:i'),
        ];
    }

    /**
     * @param Worksheet $sheet
     */
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text
            1 => ['font' => ['bold' => true]],
        ];
    }
} 