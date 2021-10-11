<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function staff()
    {
        if (isset($_COOKIE[Address::ADDRESS])) {
            $trainers = User::where('type', User::TRAINER)->where('gym_id', $_COOKIE[Address::ADDRESS])->get();
            return view('staff', compact('trainers'));
        }
        return view('staff');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function gyms()
    {
        return view('gyms');
    }

    public function time()
    {
        return view('time');
    }
}
