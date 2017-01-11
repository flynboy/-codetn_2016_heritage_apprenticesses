<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
     protected $fillable = [
        'name',
        'message',
        'blog_id',
        'created_at',
        'id'
        
    ];
}
