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
								<li class="breadcrumb-item active" aria-current="page">Product</li>
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
			  <form method="post" action="/qa/products">
				@csrf
				<div class="card">
				  <div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<div>
							<h5 class="card-title">Add Product</h5>
						</div>

					</div>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="field_1" class="form-label">Field 1:</label>
								<input type="text" value="{{old('field_1')}}" class="form-control @error('field_1') is-invalid @enderror" id="field_1" name="field_1" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_1') }}</span>

							  </div>
							  <div class="mb-3">
								<label for="field_2" class="form-label">Field 2:</label>
								<input type="text" value="{{old('field_2')}}" class="form-control @error('field_2') is-invalid @enderror" id="field_2" name="field_2" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_2') }}</span>

							  </div>
							  <div class="mb-3">
								<label for="field_3" class="form-label">Field 3:</label>
								<input type="text" value="{{old('field_3')}}" class="form-control @error('field_3') is-invalid @enderror" id="field_3" name="field_3" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_3') }}</span>

							  </div>
							  <div class="mb-3">
								<label for="field_4" class="form-label">Field 4:</label>
								<input type="text" value="{{old('field_4')}}" class="form-control @error('field_4') is-invalid @enderror" id="field_4" name="field_4" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_4') }}</span>

							  </div>
							  <div class="mb-3">
								<label for="field_5" class="form-label">Field 5:</label>
								<input type="text" value="{{old('field_5')}}" class="form-control @error('field_5') is-invalid @enderror" id="field_5" name="field_5" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_5') }}</span>

							  </div>
							  <div class="mb-3">
								<label for="field_6" class="form-label">Field 6:</label>
								<input type="text" value="{{old('field_6')}}" class="form-control @error('field_6') is-invalid @enderror" id="field_6" name="field_6" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_6') }}</span>

							  </div>
							  <div class="mb-3">
								<label for="field_7" class="form-label">Field 7:</label>
								<input type="text" value="{{old('field_7')}}" class="form-control @error('field_7') is-invalid @enderror" id="field_7" name="field_7" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_7') }}</span>

							  </div>
                            </div>
						   </div>
						   <div class="col-4">
                           <div class="border border-3 p-4 rounded">


							  <div class="mb-3">
								<label for="field_8" class="form-label">Field 8:</label>
								<input type="text" value="{{old('field_8')}}" class="form-control @error('field_8') is-invalid @enderror" id="field_8" name="field_8" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_8') }}</span>

							  </div>
							  <div class="mb-3">
								<label for="field_9" class="form-label">Field 9:</label>
								<input type="text" value="{{old('field_9')}}" class="form-control @error('field_9') is-invalid @enderror" id="field_9" name="field_9" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_9') }}</span>

							  </div>
							  <div class="mb-3">
								<label for="field_10" class="form-label">Field 10:</label>
								<input type="text" value="{{old('field_10')}}" class="form-control @error('field_10') is-invalid @enderror" id="field_10" name="field_10" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_10') }}</span>
							  </div>
							  <div class="mb-3">
								<label for="field_11" class="form-label">Field 11:</label>
								<input type="text" value="{{old('field_11')}}" class="form-control @error('field_11') is-invalid @enderror" id="field_11" name="field_11" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_11') }}</span>

							  </div>
							  <div class="mb-3">
								<label for="field_12" class="form-label">Field 12:</label>
								<input type="text" value="{{old('field_12')}}" class="form-control @error('field_12') is-invalid @enderror" id="field_12" name="field_12" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('field_12') }}</span>
							  </div>
							  <div class="mb-3" id="addInputField">

							  </div>
                            <div class="col-12">
								<button type="submit" class="btn btn-primary px-4">Submit Item</button>
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
