<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class Contentcontroller extends Controller
{
    public function index()
    {
        $trains = Train::all();
        // $trains = Train::where('departure', '>=', now())->get();
        return view('trains', compact('trains'));
    }
}
