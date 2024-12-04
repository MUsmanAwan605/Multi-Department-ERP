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
								<li class="breadcrumb-item active" aria-current="page">Grommet A Rear Cover CD-100</li>
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
			  <form method="post" action="/qa/inline/GrmtARearCvrCD100">
				@csrf
				<div class="card">
				  <div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<div>
							<h5 class="card-title">Add Inspection Record</h5>
						</div>

					</div>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							  <div class="mb-3">
								<label for="date" class="form-label">Select Date</label>
								<input type="date" value="{{old('date')}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('date') }}</span>
							  </div>

							  <div class="mb-3">
								<label class="form-label" for="moulding">Select Moulding Result</label>
								<select class="form-select @error('moulding') is-invalid @enderror" name="moulding" id="moulding">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('moulding') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('moulding') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('moulding') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="triming">Select Triming Result</label>
								<select class="form-select @error('triming') is-invalid @enderror" name="triming" id="triming">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('triming') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('triming') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('triming') }}</span>
							  </div>

							  <div class="mb-3">
								<label class="form-label" for="prod">Select Production Result</label>
								<select class="form-select @error('prod') is-invalid @enderror" name="prod" id="prod">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('prod') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('prod') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('prod') }}</span>
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
