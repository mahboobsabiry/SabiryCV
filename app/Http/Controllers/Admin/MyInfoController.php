<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyInfo;
use Session;

class MyInfoController extends Controller
{
    // Retrieve All Data
    public function index()
    {
        $infos = MyInfo::all();
        return view('admin.my_infos.index', compact('infos'));
    }

    // Create
    public function create()
    {
        return view('admin.my_infos.create');
    }

    // Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'key'   => 'required|alpha',
            'value' => 'nullable'
        ]);

        MyInfo::create($request->all());
        
        Session::flash('success', 'My Information has been added successfully!');

        return redirect()->route('admin.infos.index');
    }

    // Show details
    public function show(MyInfo $info)
    {
        //
    }

    // Render edit page
    public function edit(MyInfo $info)
    {
        //
    }

    // Update Data
    public function update(Request $request, MyInfo $info)
    {
        //
    }

    // Delete data
    public function destroy($id)
    {
        MyInfo::find($id)->delete();
        
        Session::flash('success', 'My Information has been deleted successfully!');

        return redirect()->route('admin.infos.index');
    }
}
