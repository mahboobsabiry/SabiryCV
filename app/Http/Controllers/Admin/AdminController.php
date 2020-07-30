<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Admin;
use Image;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
    	return view('admin.index');
    }

    // Render settings page
    public function settings()
    {
    	$adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first();
    	return view('admin.settings.index', compact('adminDetails'));
    }

    // Login Admin User
    public function login(Request $request)
    {
    	if ($request->isMethod('post')) {
    		$data = $request->all();

    		$rules = [
    			'email'		=> 'required|email|max:84',
    			'password'	=> 'required|min:6'
    		];

    		$customMessages = [
    			'email.required' => 'You must add your email, it is required!',
    			'email.email'	=> 'You entered invalid email type, please enter your correct email!',
    			'password.required'		=> 'You must add your password, it is required!',
    		];

    		$this->validate($request, $rules, $customMessages);

    		if (Auth::guard('admin')
    			->attempt([
    				'email' 	=> $data['email'], 
    				'password' 	=> $data['password']
    			])
    		) {
    			return redirect('admin/dashboard');
    		} else {
    			Session::flash('error_message', 'Invalid email or password');
    			return back();
    		}
    	}
    	return view('admin.admin_login');
    }

    // Logout
    public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect('/admin');
    }

    // Check admin current password if ok or not
    public function checkCurrentPwd(Request $request)
    {
    	$data = $request->all();

    	if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
    		echo "true";
    	} else {
    		echo "false";
    	}
    }

    // Update current password
    public function updatePassword(Request $request)
    {
    	$data = $request->all();

    	// Check if current password is correct
    	if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
    		//Check if new and confirm new password is matching
    		if ($data['new_pwd'] == $data['confirm_pwd']) {
    			Admin::where('id', Auth::guard('admin')->user()->id)
    				->update(['password' => bcrypt($data['new_pwd'])]);

    			return response()->json(['message' => 'Password has been updated successfully!']);
    		} else {
    			return response()->json(['error' => 'New password and confirm password not match!']);
    		}
    	} else {
    		return response()->json(['incorrect' => 'You entered incorrect current password!']);
    	}
    }

    // Update Admin Details
    public function updateAdminDetails(Request $request)
    {
		$data = $request->all();

		$rules = [
			// 'name' 		=> 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
			'name'		=> 'required|regex:/^[\pL\s\-]+$/u',
			'mobile'	=> 'required|numeric',
			'admin_image' => 'image|mimes:jpg,jpeg,png,gif|max:2048'
		];

		$customMessages = [
			'name.required' 	=> 'Your must enter your name, it is required!',
			'name.alpha'		=> 'Please enter a valid name!',
			'mobile.required'	=> 'You must enter your mobile number!',
			'mobile.numeric'	=> 'Please enter a valid mobile number!',
			'admin_image.image'	=> 'The file must be a valid image!'
		];

		$this->validate($request, $rules, $customMessages);

		if ($request->hasFile('admin_image')) {
			$image_tmp = $request->file('admin_image');
			if ($image_tmp->isValid()) {
				// Upload The Image
				$img = Image::make($image_tmp)->encode('jpg');
                // Gnerate New Image Name
                $image_name = rand(111,99999).'.jpg';

                Storage::disk('public')->put('backend_photos/admin_photos/' . $image_name, $img);

			} else if(!empty($data['current_admin_image'])){
				$image_name = $data['current_admin_image'];
			} else {
				$image_name = "";
			}
		}

		Admin::where('email', Auth::guard('admin')->user()->email)
			->update([
				'name' => $data['name'], 
				'mobile' => $data['mobile'], 
				'image' => $image_name
			]);

		Session::flash('success_message', 'Admin details has been updated successfully!');
		return back();
    }

    // Remove Admin Image
    public function removeAdminImage()
    {
        $admin = Admin::where('id', Auth::guard('admin')->user()->id)->first();

        Storage::disk('public')->delete($admin->image);

        Session::flash('success_message', 'Image has been removed successfully!');

        return back();
    }
}
