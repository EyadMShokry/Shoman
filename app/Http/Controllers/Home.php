<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index() {
        $testimonials = Testimonial::all();
        return view('home', compact('testimonials'));
    }
}
