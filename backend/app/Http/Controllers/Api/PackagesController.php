<?php

namespace App\Http\Controllers;

use App\Models\Packages;

class PackagesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $packages = Packages::where()->get();
        return $packages;
    }


}