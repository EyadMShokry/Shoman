<?php

namespace App\Http\Controllers\adminpanel;

use App\CaseStudy;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCases as Request;
use File;


class Cases extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminpanel/cases/list', array('cases' => CaseStudy::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $case= array(
            'id' => '',
            'name' => '',
            'date' => '',
            'description' => '',
            'image' => '',
        );
        $formAction = session('locale') . '/' . 'admin/cases';
        return view('adminpanel/cases/manage', compact('case', 'formAction'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation passed, store data into database
        $data = $request->all();
        // Upload Image
        $image_name = uploadImage($data['image'], 'adminpanel/cases');
        // Set uploaded image name
        $data['image'] = $image_name;
        // Create a case in database
        CaseStudy::create($data);
        $message = trans('adminpanel/messages.success.added', ['type' => trans_choice('adminpanel/dashboard.cases.title', 1)]);
        flash($message)->success();
        return redirect('en/admin/cases');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseStudy $case)
    {
        $formAction = session('locale') . '/' . 'admin/cases/' . $case['id'];
        return view('adminpanel/cases/manage', compact('case', 'formAction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaseStudy $case)
    {
        // validation passed, store data into database
        $data = $request->all();
        // Remove old image and upload new
        if (isset($data['image'])) {
            // Retrieve case object before update
            $old_case = CaseStudy::find($case->id);
            // Remove old image
            File::delete('images/adminpanel/cases/' . $old_case['image']);
            // Upload Image
            $case->image = uploadImage($data['image'], 'adminpanel/cases');
        }
        // Update information
        $case->name = $request['name'];
        $case->description = $request['description'];
        $case->date= $request['date'];
        $case->save();
        $message = trans('adminpanel/messages.success.updated', ['type' => trans_choice('adminpanel/dashboard.cases.title', 1)]);
        flash($message)->success();
        return redirect('en/admin/cases');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
