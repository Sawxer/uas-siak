<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['npm', 'nama', 'kelas_id', 'telp', 'alamat',];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

}