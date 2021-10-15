<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\step_1;
use App\step_2;
use App\step_3;
use App\step_4;
use App\step_5;

class q1controller extends Controller
{
    public function storeInSession1()
    {
        $step = step_1::updateOrCreate(['user_id' => auth()->user()->id], request()->all() ) ;
        return view('training.step_2') ;
    }

    public function storeInSession2()
    {
        $step = step_2::updateOrCreate(['user_id' => auth()->user()->id], request()->all() ) ; ;
        return view('training.step_3') ;
    }

    public function storeInSession3()
    {
        $step = step_3::updateOrCreate(['user_id' => auth()->user()->id], request()->all() ) ; ;
        return view('training.step_4') ;
    }

    public function storeInSession4()
    {
        $step = Step_4::updateOrCreate(['user_id' => auth()->user()->id], ['answer' => request()->segment(4), 'user_id' => auth()->user()->id] ) ;
        return view('training.step_5') ;
    }

    public function storeInSession5()
    {
        $step = Step_5::updateOrCreate(['user_id' => auth()->user()->id], ['answer' => request()->segment(4), 'user_id' => auth()->user()->id] ) ;
        return redirect()->route("user.appointments") ;
    }
}
