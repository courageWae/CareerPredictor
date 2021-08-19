<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class step_4 extends Model
{
    protected $table = 'step_4' ;

    protected $fillable = [
        'answer',
        'user_id',
        '_token'
    ] ;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
