<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Experience;

class ExperienceController extends Controller
{
    // Index
    public function index()
    {
        $experience = Experience::all();
        return view('admin.experience.index', compact('experience'));
    }

    // Create
    public function create()
    {
        return view('admin.experience.create');
    }

    // Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'start_date' => 'required|numeric',
            'end_date'  => 'required',
            'name'      => 'required|max:32',
            'company'   => 'required|max:64'
        ]);

        Experience::create($request->all());

        Session::flash('success', 'Experience has been updated successfully!');

        return redirect()->route('admin.experience.index');
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
        $exp = Experience::where('id', $id)->first();
        $exp->delete();

        Session::flash('success', 'Experience has been deleted successfully!');

        return redirect()->route('admin.experience.index');
    }
}
