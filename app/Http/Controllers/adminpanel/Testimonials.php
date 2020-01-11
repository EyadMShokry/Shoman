<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Testimonial;
use App\Http\Requests\StoreTestimonials as Request;
use File;


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
        $testimonial = array(
            'id' => '',
            'name' => '',
            'position' => '',
            'quote' => '',
            'image' => '',
        );
        $formAction = session('locale') . '/' . 'admin/testimonials';
        return view('adminpanel/testimonials/manage', compact('testimonial', 'formAction', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $formAction = session('locale') . '/' . 'admin/testimonials/' . $testimonial['id'];
        return view('adminpanel/testimonials/manage', compact('testimonial', 'formAction', 'method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        // validation passed, store data into database
        $data = $request->all();
        // Remove old image and upload new
        if (isset($data['image'])) {
            // Retrieve testimonial object before update
            $old_testimonial = Testimonial::find($testimonial->id);
            // Remove old image
            File::delete('images/adminpanel/testimonials/' . $old_testimonial['image']);
            // Upload Image
            $testimonial->image = uploadImage($data['image'], 'adminpanel/testimonials');
        }
        // Update information
        $testimonial->name = $request['name'];
        $testimonial->quote = $request['quote'];
        $testimonial->position = $request['position'];
        $testimonial->save();
        $message = trans('adminpanel/messages.success.updated', ['type' => trans_choice('adminpanel/dashboard.testimonials.title', 1)]);
        flash($message)->success();
        return redirect('en/admin/testimonials');
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
