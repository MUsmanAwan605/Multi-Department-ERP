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
								<li class="breadcrumb-item active" aria-current="page">Add Capability Result</li>
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
			  <form method="post" action="/admin/capability">
				@csrf
				<div class="card">
				  <div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<div>
							<h5 class="card-title">Add Capability Result</h5>
						</div>

					</div>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							  <div class="mb-3">
								<label for="date" class="form-label">Select  Date</label>
								<input type="date" value="{{old('date')}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('date') }}</span>
							  </div>


							  <div class="mb-3">
								<label class="form-label" for="event">Select Event</label>
								<select class="form-select @error('event') is-invalid @enderror" name="event" id="event">
									<option value="none">--Select Event Result--</option>
									<option value="Pre Production" {{old('event') == 'Pre Production' ? 'selected' : NULL}}>Pre Production</option>
									<option value="Mass Production" {{old('event') == 'Mass Production' ? 'selected' : NULL}}>Mass Production</option>
								</select>
								<span class="text-danger">{{ $errors->first('event') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="part_no">Enter Part Number</label>
								<input type="text" class="form-control @error('part_no') is-invalid @enderror" value="{{old('part_no')}}" name="part_no" placeholder="Enter Part Number">
								<span class="text-danger">{{ $errors->first('part_no') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="part_name">Enter Part Name</label>
								<input type="text" class="form-control @error('part_name') is-invalid @enderror" value="{{old('part_name')}}" name="part_name" placeholder="Enter Part Name">
								<span class="text-danger">{{ $errors->first('part_name') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="msrng_ins">Enter Measuring Instrument</label>
								<input type="text" class="form-control @error('msrng_ins') is-invalid @enderror" value="{{old('msrng_ins')}}" name="msrng_ins" placeholder="Enter Measuring Equipment">
								<span class="text-danger">{{ $errors->first('msrng_ins') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="process_name">Enter Process Name</label>
								<input type="text" class="form-control @error('process_name') is-invalid @enderror" value="{{old('process_name')}}" name="process_name" placeholder="Enter Process Name">
								<span class="text-danger">{{ $errors->first('process_name') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="inspector">Inspector Name</label>
								<input type="text" class="form-control @error('inspector') is-invalid @enderror" value="{{old('inspector')}}" name="inspector" placeholder="Enter Inspector Name">
								<span class="text-danger">{{ $errors->first('inspector') }}</span>
							  </div>


							  <div class="mb-3">
								<label class="form-label" for="inspct_data">Inspection Data</label>
								<input type="text" class="form-control @error('inspct_data') is-invalid @enderror" value="{{old('inspct_data')}}" name="inspct_data" placeholder="Enter Inspection Data">
								<span class="text-danger">{{ $errors->first('inspct_data') }}</span>
							  </div>

							</div>
						</div>
							  <div class="col-lg-4">
								<div class="border border-3 p-4 rounded">




									  <div class="mb-3">
										<label class="form-label" for="inspct_rslt">Select Inspection Result</label>
										<select class="form-select @error('inspct_rslt') is-invalid @enderror" name="inspct_rslt" id="inspct_rslt">
											<option value="none">--Select Inspection Result--</option>
											<option value="Approved" {{old('inspct_rslt') == 'Approved' ? 'selected' : NULL}}>Approved</option>
											<option value="Rejected" {{old('inspct_rslt') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
										</select>
										<span class="text-danger">{{ $errors->first('inspct_rslt') }}</span>
									  </div>


									  <div class="mb-3">
                                        <label class="form-label" for="incharge">Incharge Name</label>
                                        <input type="text" class="form-control @error('incharge') is-invalid @enderror" value="{{old('incharge')}}" name="incharge" placeholder="Enter Incharge Name">
                                        <span class="text-danger">{{ $errors->first('incharge') }}</span>
                                      </div>

									  <div class="mb-3">
                                        <label class="form-label" for="manager">Manager Name</label>
                                        <input type="text" class="form-control @error('manager') is-invalid @enderror" value="{{old('manager')}}" name="manager" placeholder="Enter Manager Name">
                                        <span class="text-danger">{{ $errors->first('manager') }}</span>
                                      </div>


									  <div class="mb-3">
                                        <label class="form-label" for="head">Head Name</label>
                                        <input type="text" class="form-control @error('head') is-invalid @enderror" value="{{old('head')}}" name="head" placeholder="Enter Head Name">
                                        <span class="text-danger">{{ $errors->first('head') }}</span>
                                      </div>



							  <div class="mb-3">
								<button type="submit" class="btn btn-primary">Submit</button>
							  </div>
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
