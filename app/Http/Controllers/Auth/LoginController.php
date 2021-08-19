<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = null ; //RouteServiceProvider::HOME;
    protected function redirectTo()
    {
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
        return route('user.appointments');
      }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
