<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'author_id',
        'title',
        'image',
        'path',
        'slug',
        'body',
        'is_published',
        'seo_description',
        'seo_keywords',
        'seo_title',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/pages/' . $this->getKey());
    }
}
