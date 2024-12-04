@extends('admin.admin_dashboard')
@section('admin')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">eCommerce</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Inspector</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
			  <form method="post" action="/admin/inspectors" enctype="multipart/form-data">
				@csrf
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add Inspector</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="name" class="form-label">Name</label>
								<input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter spare part ID">
								<span class="text-danger">{{ $errors->first('name') }}</span>

							  </div>
                              <div class="mb-3">
								<label for="gender" class="form-label">Gender</label>
								<input type="text" value="{{old('gender')}}" class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" placeholder="Enter spare part ID">
								<span class="text-danger">{{ $errors->first('gender') }}</span>

							  </div>
                              <div class="mb-3">
								<label for="contact" class="form-label">Contact</label>
								<input type="text" value="{{old('contact')}}" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="Enter spare part ID">
								<span class="text-danger">{{ $errors->first('contact') }}</span>

							  </div>
                              <div class="mb-3">
								<label for="profile" class="form-label">Profile Image</label>
								<input type="file" value="{{old('profile')}}" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" >
								<span class="text-danger">{{ $errors->first('profile') }}</span>

							  </div>
                              <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>

                            </div>
						   </div>

                        </div>
					   </div>
					</div>
					</div>
				  </div>
				</form>
			  </div>


			</div>
		<!--end page wrapper -->
@endsection
