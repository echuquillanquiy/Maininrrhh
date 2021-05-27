<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    public function index(){
        return view('works.index');
    }

    public function show(Work $work){

        $similares = Work::where('type_id', $work->type_id)
            ->where('id', '!=', $work->id)
            ->where('estado', 1)
            ->latest('id')
            ->take(5)
            ->get();

        return view('works.show', compact('work', 'similares'));
    }

    public function applied(Work $work){
        $work->applicants()->attach(auth()->user()->id);

        return back();
    }
}
