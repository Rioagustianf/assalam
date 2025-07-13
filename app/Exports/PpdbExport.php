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
            'NISN',
            'NIK',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Alamat Lengkap',
            'Tinggal Bersama',
            'No Telp/WA',
            'Jumlah Saudara',
            'No KK',
            'Nama Ayah',
            'NIK Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Nama Ibu',
            'NIK Ibu',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Alamat Orangtua',
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
            $row->nisn,
            $row->nik,
            $row->jenis_kelamin,
            $row->tempat_lahir,
            $row->tanggal_lahir,
            $row->alamat_lengkap,
            $row->tinggal_bersama,
            $row->no_telp,
            $row->jumlah_saudara,
            $row->no_kk,
            $row->nama_ayah,
            $row->nik_ayah,
            $row->pendidikan_ayah,
            $row->pekerjaan_ayah,
            $row->nama_ibu,
            $row->nik_ibu,
            $row->pendidikan_ibu,
            $row->pekerjaan_ibu,
            $row->alamat_ortu,
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