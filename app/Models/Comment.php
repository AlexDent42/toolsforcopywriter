<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable =
    [
    	'name',
    	'email',
    	'comment',
    	'status',
        'tool_id'
    ];


    public function tool()
    {
    	return $this->belongsTo(Tool::class);
    }
}
