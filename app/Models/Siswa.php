<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $primaryKey = "nisn";
    protected $fillable = ['nis', 'nama', 'id_kelas', 'alamat', 'no_telp', 'id_spp'];  
}
