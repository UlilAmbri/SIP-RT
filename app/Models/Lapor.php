<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Lapor extends Model
{
    use softDeletes;

    protected $table = "lapor";
    protected $fillable = [
        'name',
        'alamat',
        'no_hp'
    ];

    protected $hidden;
}
