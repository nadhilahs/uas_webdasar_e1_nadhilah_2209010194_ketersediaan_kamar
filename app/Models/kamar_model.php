<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar_model extends Model
{
    protected $fillable = [
        'kamar_id',
        'kelas',
        'fasilitas',
        'harga',
    ];
}
