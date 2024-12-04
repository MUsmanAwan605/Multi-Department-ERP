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
								<li class="breadcrumb-item active" aria-current="page">Tube Battery Breather CD-100</li>
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
			  <form method="post" action="/admin/inline/tBtryBreatherCD100">
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
								<label class="form-label" for="extr_sngl_lyr">Select Extrusion(Single Layer) Result</label>
								<select class="form-select @error('extr_sngl_lyr') is-invalid @enderror" name="extr_sngl_lyr" id="extr_sngl_lyr">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('extr_sngl_lyr') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('extr_sngl_lyr') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('extr_sngl_lyr') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="semi_vulcan">Select Semi Vulcanization Result</label>
								<select class="form-select @error('semi_vulcan') is-invalid @enderror" name="semi_vulcan" id="semi_vulcan">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('semi_vulcan') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('semi_vulcan') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('semi_vulcan') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="fnl_ctng_t">Select Final Cutting Tube Result</label>
								<select class="form-select @error('fnl_ctng_t') is-invalid @enderror" name="fnl_ctng_t" id="fnl_ctng_t">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('fnl_ctng_t') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('fnl_ctng_t') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('fnl_ctng_t') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="cmplt_vulcan">Select Complete Vulcanization Result</label>
								<select class="form-select @error('cmplt_vulcan') is-invalid @enderror" name="cmplt_vulcan" id="cmplt_vulcan">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('cmplt_vulcan') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('cmplt_vulcan') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('cmplt_vulcan') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="wshng_t">Select Washing Tube Result</label>
								<select class="form-select @error('wshng_t') is-invalid @enderror" name="wshng_t" id="wshng_t">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('wshng_t') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('wshng_t') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('wshng_t') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="punching">Select Punching Result</label>
								<select class="form-select @error('punching') is-invalid @enderror" name="punching" id="punching">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('punching') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('punching') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('punching') }}</span>
							  </div>

							</div>
						</div>
							  <div class="col-4">
								<div class="border border-3 p-4 rounded">


							  <div class="mb-3">
								<label class="form-label" for="asmbl_grmt">Select Assembly Grommet Result</label>
								<select class="form-select @error('asmbl_grmt') is-invalid @enderror" name="asmbl_grmt" id="asmbl_grmt">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('asmbl_grmt') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('asmbl_grmt') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('asmbl_grmt') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="mldng_grmt">Select Moulding Grommet Result</label>
								<select class="form-select @error('mldng_grmt') is-invalid @enderror" name="mldng_grmt" id="mldng_grmt">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('mldng_grmt') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('mldng_grmt') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('mldng_grmt') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="trmng_grmt">Select Triming Grommet Result</label>
								<select class="form-select @error('trmng_grmt') is-invalid @enderror" name="trmng_grmt" id="trmng_grmt">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('trmng_grmt') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('trmng_grmt') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('trmng_grmt') }}</span>
							  </div>

							  <div class="mb-3">
								  <label class="form-label" for="prod">Select  Production Result</label>
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
