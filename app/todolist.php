<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    protected $fillable = [
        'name',
        'comment',
        'post_id'
    ];
}
