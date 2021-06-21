<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    function tours() {

        $tours = Tour::all();
        return view("tour")
            ->with("tours", $tours);
    }
}
