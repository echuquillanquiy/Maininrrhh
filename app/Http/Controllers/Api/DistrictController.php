<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getDistritoxProv($id)
    {
        return District::where('province_id', $id)->get(['id', 'name','province_id']);
    }
}
