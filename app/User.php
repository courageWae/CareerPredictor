<?php

namespace App;
use App\step_1;
use App\step_2;
use App\step_3;
use App\step_4;
use App\step_5;
use App\profession;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'phone',
        'photo',
        'alias',
        'user_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
       return $this->belongsTo('App\Role');
    }

    public function scopeAdmin($query){
        return $query->where('role_id',1);
    }
    public function scopeInsurer($query){
        return $query->where('role_id',2);
    }
    public function scopeLawyer($query){
        return $query->where('role_id',3);
    }
    public function scopeClient($query){
        return $query->where('role_id',4);
    }

    public function scopeInsurerClient($query, $insurerID){
        return $query->where('insurer',$insurerID);
    }

    public function getRouteKeyName()
    {
        return 'alias';
    }

    public function step_1()
    {
        return $this->hasOne(Step_1::class);
    }

    public function step_2()
    {
        return $this->hasOne(Step_2::class);
    }

    public function step_3()
    {
        return $this->hasOne(Step_3::class);
    }

    public function step_4()
    {
        return $this->hasOne(Step_4::class);
    }

    public function step_5()
    {
        return $this->hasOne(Step_5::class);
    }

    public function profession()
    {
        return $this->hasMany(profession::class);
    }
}
