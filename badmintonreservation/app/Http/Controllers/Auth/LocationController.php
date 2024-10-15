<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getMunicipalities($prefectureId)
    {
        $municipalities = Municipality::where('prefecture_id', $prefectureId)->get();
        return response()->json($municipalities);
    }
}
