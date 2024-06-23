<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelayanan extends Model
{
    protected $fillable = [
        'idpelayanan',
        'jenispelayanan',
        'kamar_id',
    ];
}
