<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'table_log';

    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'action',
        'ip',
        'table',
        'table_id'
    ];
}
