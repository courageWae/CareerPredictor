<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    protected $fillable = ['title', 'salary', 'requirement', 'definition'] ;

    public $timestamps = false ;
}
