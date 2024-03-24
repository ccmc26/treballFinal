<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table = 'language';

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'N_max',
        'dificultad'
    ];

}