<?php

namespace App\Http\Controllers;

use App\CaseStudy;
use App\Testimonial;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index() {
        $testimonials = Testimonial::all();
        $cases = CaseStudy::all();
        return view('home', compact('testimonials', 'cases'));
    }
}
