<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function abouts() {

        $abouts = About::all();
        return view("about")
            ->with("abouts", $abouts);
    }
}
