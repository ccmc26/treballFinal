<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    protected $table = 'articulo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        // 'stock',
        // 'discount',
        'photo',
        'description',
        'price',
        'created_by',
        'updated_by'
    ];

    //la slug fa que la url siga "amigable", en este es creara a partir del title
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
        ->generateSlugsFrom('name')
        ->saveSlugsTo('slug');
    }

}
