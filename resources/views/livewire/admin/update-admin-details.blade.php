<div>
    <div class="panel panel-default card-view">
		<div class="panel-heading">
			<div class="pull-left">
				<h6 class="panel-title txt-dark">Update Admin Details</h6>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="panel-wrapper collapse in">
			<div class="panel-body">
				@if(session()->has('success_message'))
                    <div class="m-2 mb-20 text-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif
                
                @if(session()->has('error_message'))
                    <div class="m-2 mb-20 text-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif

				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div class="form-wrap">
							<form wire:submit.prevent="save" enctype="multipart/form-data">
								
								<!-- Email Address -->
								<div class="form-group">
									<label class="control-label mb-10" for="email">Email Address</label>

									<div class="input-group">
										<div class="input-group-addon">
											<i class="icon-envelope-open"></i>
										</div>

										<input class="form-control" value="{{ $adminDetails->email }}" readonly>
									</div>
								</div>
								<!--/==/ End of Email Address -->

								<!-- Admin Type -->
								<div class="form-group">
									<label class="control-label mb-10" for="type">Admin Type</label>

									<div class="input-group">
										<div class="input-group-addon">
											<i class="icon-key"></i>
										</div>

										<input class="form-control" value="{{ $adminDetails->type }}" readonly>
									</div>
								</div>
								<!--/==/ End of Admin Type -->

								<!-- Admin Name -->
								<div class="form-group @error('name') has-error @enderror">
									<label class="control-label mb-10" for="name">Admin Name</label>

									<div class="input-group">
										<div class="input-group-addon">
											<i class="icon-user"></i>
										</div>

										<input type="text" class="form-control" wire:model="name" name="name" id="name" value="{{ $adminDetails->name }}" placeholder="Enter Admin Name" required>
									</div>

									@error('name')
										<div class="text-error small">{{ $message }}</div>
									@enderror
								</div>
								<!--/==/ End of Admin Name -->

								<!-- Admin Mobile Number -->
								<div class="form-group @error('name') has-error @enderror">
									<label class="control-label mb-10" for="name">Admin Mobile Number</label>

									<div class="input-group">
										<div class="input-group-addon">
											<i class="icon-phone"></i>
										</div>

										<input type="text" class="form-control" wire:model="mobile" name="mobile" id="mobile" value="{{ $adminDetails->mobile }}" placeholder="Enter Admin Mobile Number" required>
									</div>

									@error('mobile')
										<div class="text-error small">{{ $message }}</div>
									@enderror
								</div>
								<!--/==/ End of Admin Mobile Number -->

								<!-- Admin Image -->
								<div class="form-group @error('image') has-error @enderror mb-30">
									<label class="control-label mb-10 text-left">File upload</label>
									<div class="fileinput fileinput-new input-group" data-provides="fileinput">
										<div class="form-control" data-trigger="fileinput"> 
											<i class="icon-picture fileinput-exists"></i> 
											<span class="fileinput-filename"></span>
										</div>
										<span class="input-group-addon fileupload btn btn-info btn-anim btn-file">
											<i class="fa fa-upload"></i> 
											<span class="fileinput-new btn-text">Select file</span> 
											<span class="fileinput-exists btn-text">Change</span>
											<input type="file" wire:model="image" name="admin_image">
										</span> 
										<a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput">
											<i class="fa fa-trash"></i>
											<span class="btn-text"> Remove</span>
										</a> 
									</div>

									@error('image')
										<div class="text-error small"></div>
									@enderror
								</div>

								@if($adminDetails->image)
									<div class="mb-30">
										<a href="{{ $adminDetails->imagePath }}" target="_blank">
											<img src="{{ $adminDetails->imagePath }}" alt="{{ $adminDetails->name }}" width="120">
										</a>

										<a href="javascript:void(0)" wire:click="remove({{ $adminDetails->image }})" class="text-danger">
											<i class="icon-close"></i>
										</a>

										<input type="hidden">
									</div>
								@endif
								<!--/==/ End of Admin Image -->

								<button type="submit" class="btn btn-success mr-10">Update</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	window.livewire.on('alert', param => {
		toastr[param['type']](param['title'])(param['message']);
	});
</script>
