<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Language;
use App\Models\User;

class User_Language extends Model
{
    use HasFactory;
    protected $table = "user_language";

    protected $primaryKey = 'id';
    public function user(){
        return $this->belongTo(User::class, 'id_user');
    }
    public function language(){
        return $this->belongsTo(Language::class, 'id_language');
    }

    protected $fillable = ['id_user', 'id_language', 'level'];
}
