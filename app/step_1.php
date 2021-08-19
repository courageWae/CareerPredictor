<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class step_1 extends Model
{
    protected $fillable = [
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'user_id',
        '_token'
    ] ;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
