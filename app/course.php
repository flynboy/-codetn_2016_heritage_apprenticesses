<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //add fields here
    protected $fillable = [
        'Name'
        , 'Teacher'
        , 'department_id'
        
    ];
    
}
