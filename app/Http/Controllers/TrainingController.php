<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class TrainingController extends Controller
{
    public function step_1(){
    	return view('training.step_1');
    }

    public function step_2(){
    	return view('training.step_2');
    }

    public function step_3(){
    	return view('training.step_3');
    }

    public function step_4(){
    	return view('training.step_4');
    }

    public function step_5()
    {
    	return view('training.step_5');
    }

    public function gallery(){
    	return view('training.gallery',['album'=>Album::get()]);
    }
}
