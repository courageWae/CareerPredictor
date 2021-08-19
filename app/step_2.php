<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class step_2 extends Model
{
    protected $table = 'step_2' ;

    protected $fillable = [
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'user_id',
        '_token'
    ] ;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
