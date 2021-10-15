<?php

namespace App\Http\Controllers;

use App\career;
use App\profession;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Collection::make(career::get())->random(2)->toArray();
        foreach($careers as $career)
        {
            if(auth()->user()->profession()->count() !== 2)
            {
                auth()->user()->profession()->create($career) ;
            }
        }

        $professions = profession::where('user_id', auth()->user()->id)->get();
        return view('user.dashboard', ['professions' => $professions]) ;
    }
}
