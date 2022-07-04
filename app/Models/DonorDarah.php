<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorDarah extends Model
{
    protected $table = 'donordarah';
    protected $fillable = ['nik', 'nama', 'tgllahir','jeniskelamin', 'alamat', 'telpon', 'golongandarah'];
}
