<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contentcontroller extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('trains.index', compact('trains'));
    }
}
