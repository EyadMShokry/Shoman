<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Testimonial;
use App\Http\Requests\StoreTestimonials;

class Testimonials extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminpanel/testimonials/list', array('testimonials' => Testimonial::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel/testimonials/manage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonials $request)
    {
        // validation passed, store data into database
        $data = $request->all();
        // Upload Image
        $image_name = uploadImage($data['image'], 'adminpanel/testimonials');
        // Set uploaded image name
        $data['image'] = $image_name;
        // Create a testimonial in database
        Testimonial::create($data);
        $message = trans('adminpanel/messages.success.added', ['type' => trans_choice('adminpanel/dashboard.testimonials.title', 1)]);
        flash($message)->success();
        return redirect('en/admin/testimonials');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTestimonials $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
