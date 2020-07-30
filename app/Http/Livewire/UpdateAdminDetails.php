<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Admin;
use Image;

class UpdateAdminDetails extends Component
{
	use WithFileUploads;

	public $name;
	public $mobile;
	public $image;

	protected $listeners = [
		'imageUpload'
	];

	public function imageUpload($imageData)
	{
		$this->image = $imageData;
	}

	public function save()
	{
		$this->validate([
			'name'	=> 'required|max:64|regex:/^[\pL\s\-]+$/u',
			'mobile' => 'required|max:20',
			'image'	=> 'sometimes|image|mimes:jpg,jpeg,png,gif|max:2048'
		]);

		$imageStore = $this->storeImage();

		Admin::where('email', Auth::guard('admin')->user()->email)->update([
			'name' => $this->name,
			'mobile' => $this->mobile,
			'image'	=> $imageStore
		]);

		$this->emit('alert', [
			'type' 		=> 'success', 
			'title'		=> 'Success Message!',
			'message' 	=> 'Your details has been updated successfully :)'
		]);
	}

	// Store Image
	public function storeImage()
	{
		if(!$this->image){
			return null;
		}

		$img = Image::make($this->image)->encode('jpg');
		$name = rand(111,99999). '.jpg';
		Storage::disk('public')->put('backend_photos/admin_photos/'. $name, $img);
		return $name;
	}

    public function render()
    {
    	$adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first();

        return view('livewire.admin.update-admin-details', [
        	'adminDetails' => $adminDetails
        ]);
    }
}
