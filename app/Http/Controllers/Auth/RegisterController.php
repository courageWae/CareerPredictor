<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\step_1 ;
use App\step_2 ;
use App\step_3 ;
use App\step_4 ;
use App\step_5 ;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = null ; #RouteServiceProvider::HOME;

    protected function redirectTo(){
      if(auth()->user()->role_id == 1)
      {
        return route('admin.dashboard');
      }
      else if(auth()->user()->role_id == 2)
      {
        return route('insurer.dashboard');
      }
      else if(auth()->user()->role_id == 3)
      {
        return route('lawyer.dashboard');
      }
      else if(auth()->user()->role_id == 4)
      {
        return route('user.appointments') ;
      }
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_name' => ['required', 'string','max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['required'],
            'role_id' =>['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     protected function create(array $data)
    {
        $user = User::updateOrCreate(
                    [
                        'email' => $data['email'],
                        'name' => $data['name']
                    ],
                    [
                        'name' => $data['name'],
                        'user_name'=>$data['user_name'],
                        'email' => $data['email'],
                        'password' => Hash::make($data['password']),
                        'alias'=> Str::slug($data['name'].$data['user_name'],'-'),
                        'phone' => $data['phone'],
                        'role_id' => $data['role_id'],
                    ]
                );

                return $user;
        
    }

}
