<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function getProvincexDep($id){
        return Province::where('departament_id', $id)->get(['id', 'name', 'departament_id']);
    }
}
