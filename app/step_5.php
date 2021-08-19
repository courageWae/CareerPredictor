<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class step_5 extends Model
{
    protected $table = 'step_5' ;

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
