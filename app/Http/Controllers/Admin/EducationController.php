<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Education;
use Session;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = Education::all();
        return view('admin.education.index', compact('education'));
    }

    // Create
    public function create()
    {
        return view('admin.education.create');
    }

    // Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'start_date'    => 'required|numeric',
            'end_date'      => 'required',
            'name'  => 'required|max:32',
            'field' => 'required|max:64',
            'place' => 'required|max:64'
        ]);

        Education::create($request->all());

        Session::flash('success', 'Education has been updated successfully!');

        return redirect()->route('admin.education.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edu = Education::where('id', $id)->first();
        $edu->delete();

        Session::flash('success', 'Education has been deketed successfully!');

        return redirect()->route('admin.education.index');
    }
}
