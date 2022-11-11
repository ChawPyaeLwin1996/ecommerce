<?php

namespace App\Http\Controllers\Api; 

use App\Models\Place;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $place = Place::all();   
        return $place;
    }
}