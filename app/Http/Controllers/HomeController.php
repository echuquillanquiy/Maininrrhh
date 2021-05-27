<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();
        $works = Work::where('estado', '1')->latest('id')->get()->take(12);

        return view('welcome', compact('works', 'services'));
    }
}
