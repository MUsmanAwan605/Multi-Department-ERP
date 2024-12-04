@extends('quality.qa_dashboard')
@section('qa')
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
								<li class="breadcrumb-item active" aria-current="page">File Upload</li>
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
			  <form method="post" action="/admin/file-upload/{{$quality->id}}" enctype="multipart/form-data">
				@csrf
				{{method_field('put')}}
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Edit File Upload</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
						   <div class="mb-3">
                                <label for="file_upload" class="form-label">Upload Excel File</label>
								<input type="file" class="form-control @error('file_upload') is-invalid @enderror" accept=".xlsx,.xls" name="file_upload" id="file_upload">
								<span class="text-danger">{{$errors->first('file_upload')}}</span>
								<h6 class="mt-2">Previously Uploaded File: <span class="text-success">{{$quality->file_name}}</span></h6>
							</div>
							<div class="mb-3">
								<label for="file_name" class="form-label">File Name</label>
								<input type="text" name="file_name" id="file_name" class="form-control @error('file_name') is-invalid @enderror" value="{{old('file_name',$quality->file_name)}}" placeholder="Enter File Name">
								<span class="text-danger">{{ $errors->first('file_name') }}</span>
							</div>
							<div class="mb-3">
                                <label for="date_of_upload" class="form-label">Date Of File Upload</label>
                                <input class="form-control @error('date_of_upload') is-invalid @enderror" value="{{old('date_of_upload',$quality->date_of_upload)}}" name="date_of_upload" type="date">
								<span class="text-danger">{{ $errors->first('date_of_upload') }}</span>
                            </div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary px-4">Submit</button>
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
