<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;


    protected $fillable = [
    		'title',
    		'description',
            'description_seo',
    		'text',
            'title_seo',
            'slug',
            'image'
    	];

    public function comments()
    {
    	return $this->hasMany(Comment::class);



    }
}
