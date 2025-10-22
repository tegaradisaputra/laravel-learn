<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    //
    protected $table = 'siswa';
    protected $fillable = ['nama', 'tanggal_lahir', 'jurusan', 'nilai'];

    public function mentor(){
        return $this->belongsTo(Mentor::class);
    }
}