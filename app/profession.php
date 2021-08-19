<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class profession extends Model
{
    protected $fillable = ['title', 'requirement', 'definition', 'salary'] ;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
