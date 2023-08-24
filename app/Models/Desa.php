<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'desa';
    protected $fillable = ['nama_desa', 'nama_dusun', 'nama_jalan',	'rukun_tangga',	'rukun_warga',	'nama_rt',	'nama_rw',	'jumlah_penduduk'];
}
