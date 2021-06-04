<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Departament;
use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    public function getDepartaments()
    {
        return Departament::orderBy('id', 'Asc')->get(['id', 'name']);
    }
}
