<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Layanan extends Model
{
    use softDeletes;

    protected $table = "lapors";
    protected $fillable = [
        'name','layanan'
    ];

    protected $hidden;
}
