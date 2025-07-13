<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpdbSetting extends Model
{
    use HasFactory;

    protected $table = 'ppdb_settings';
    protected $fillable = [
        'tahun_ajaran',
        'kuota',
    ];
} 