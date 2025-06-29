<?php

namespace App\Exports;

use App\Models\Ppdb;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PpdbExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ppdb::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'No',
            'Nama Lengkap',
            'Email',
            'No HP',
            'Alamat',
            'Asal Sekolah',
            'Tanggal Daftar',
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
            $row->nama_lengkap,
            $row->email,
            $row->no_hp,
            $row->alamat,
            $row->asal_sekolah,
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