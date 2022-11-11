<?php

namespace App\Http\Controllers\Api; 

use App\Models\Packages;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $packages = Packages::all();   
        return $packages;
    }


}