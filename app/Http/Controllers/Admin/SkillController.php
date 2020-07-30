<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skill;

class SkillController extends Controller
{
    // Index
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    // Create
    public function create()
    {
        return view('admin.skills.create');
    }

    // Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'percent'   => 'required|numeric'
        ]);

        Skill::create($request->all());

        Session::flash('success', 'Skill has been updated successfully!');

        return redirect()->route('admin.skills.index');
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
        $skill = Skill::where('id', $id)->first();
        $skill->delete();

        Session::flash('success', 'Skill has been deleted successfully!');

        return redirect()->route('admin.skills.index');
    }
}
