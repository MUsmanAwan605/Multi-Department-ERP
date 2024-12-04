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
								<li class="breadcrumb-item active" aria-current="page">Tube Battery Breather Deluxe</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<form method="post" action="/qa/product/tBtryBreatherDLX/{{$tube->sr_no}}">
					@csrf
					{{method_field('put')}}
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
									<label for="date" class="form-label">Select Month</label>
									<input type="month" value="{{old('date',$tube->date)}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Enter Field Input">
									<span class="text-danger">{{ $errors->first('date') }}</span>
								  </div>
								  <div class="mb-3">
									<label class="form-label" for="extr_sngl_lyr">Select Extrusion(Single Layer) Result</label>
									<select class="form-select @error('extr_sngl_lyr') is-invalid @enderror" name="extr_sngl_lyr" id="extr_sngl_lyr">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('extr_sngl_lyr',$tube->extr_sngl_lyr) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('extr_sngl_lyr',$tube->extr_sngl_lyr) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('extr_sngl_lyr') }}</span>
								  </div>
								  <div class="mb-3">
									<label class="form-label" for="semi_vulcan">Select Semi Vulcanization Result</label>
									<select class="form-select @error('semi_vulcan') is-invalid @enderror" name="semi_vulcan" id="semi_vulcan">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('semi_vulcan',$tube->semi_vulcan) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('semi_vulcan',$tube->semi_vulcan) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('semi_vulcan') }}</span>
								  </div>
								  <div class="mb-3">
									<label class="form-label" for="fnl_ctng_t">Select Final Cutting Tube Result</label>
									<select class="form-select @error('fnl_ctng_t') is-invalid @enderror" name="fnl_ctng_t" id="fnl_ctng_t">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('fnl_ctng_t',$tube->fnl_ctng_t) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('fnl_ctng_t',$tube->fnl_ctng_t) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('fnl_ctng_t') }}</span>
								  </div>
								  <div class="mb-3">
									<label class="form-label" for="cmplt_vulcan">Select Complete Vulcanization Result</label>
									<select class="form-select @error('cmplt_vulcan') is-invalid @enderror" name="cmplt_vulcan" id="cmplt_vulcan">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('cmplt_vulcan',$tube->cmplt_vulcan) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('cmplt_vulcan',$tube->cmplt_vulcan) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('cmplt_vulcan') }}</span>
								  </div>
								  <div class="mb-3">
									<label class="form-label" for="wshng_t">Select Washing Tube Result</label>
									<select class="form-select @error('wshng_t') is-invalid @enderror" name="wshng_t" id="wshng_t">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('wshng_t',$tube->wshng_t) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('wshng_t',$tube->wshng_t) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('wshng_t') }}</span>
								  </div>
								  <div class="mb-3">
									<label class="form-label" for="punching">Select Punching Result</label>
									<select class="form-select @error('punching') is-invalid @enderror" name="punching" id="punching">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('punching',$tube->wshng_t) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('punching',$tube->wshng_t) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('punching') }}</span>
								  </div>

								</div>
							</div>
								  <div class="col-4">
									<div class="border border-3 p-4 rounded">

										<div class="mb-3">
											<label class="form-label" for="extr_wshr">Select Extrusion(Washer) Result</label>
									<select class="form-select @error('extr_wshr') is-invalid @enderror" name="extr_wshr" id="extr_wshr">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('extr_wshr',$tube->extr_wshr) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('extr_wshr',$tube->extr_wshr) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('extr_wshr') }}</span>
								  </div>
								  <div class="mb-3">
									<label class="form-label" for="asmbl_wshr">Select Assembly Washer  Result</label>
									<select class="form-select @error('asmbl_wshr') is-invalid @enderror" name="asmbl_wshr" id="asmbl_wshr">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('asmbl_wshr',$tube->extr_wshr) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('asmbl_wshr',$tube->extr_wshr) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('asmbl_wshr') }}</span>
								  </div>
								  <div class="mb-3">
									<label class="form-label" for="fnl_ctng_wshr">Select Final Cutting Washer Result</label>
									<select class="form-select @error('fnl_ctng_wshr') is-invalid @enderror" name="fnl_ctng_wshr" id="fnl_ctng_wshr">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('fnl_ctng_wshr',$tube->extr_wshr) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('fnl_ctng_wshr',$tube->extr_wshr) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('fnl_ctng_wshr') }}</span>
								  </div>
								  <div class="mb-3">
									<label class="form-label" for="vulcan_wshr">Select Vulcanization Washer Result</label>
									<select class="form-select @error('vulcan_wshr') is-invalid @enderror" name="vulcan_wshr" id="vulcan_wshr">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('vulcan_wshr',$tube->extr_wshr) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('vulcan_wshr',$tube->extr_wshr) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
									</select>
									<span class="text-danger">{{ $errors->first('vulcan_wshr') }}</span>
								</div>
								<div class="mb-3">
								  <label class="form-label" for="date_code_prnt">Select Date Code Printing Result</label>
								  <select class="form-select @error('date_code_prnt') is-invalid @enderror" name="date_code_prnt" id="date_code_prnt">
									  <option value="none">--Select Inspection Result--</option>
									  <option value="Approved" {{old('date_code_prnt',$tube->extr_wshr) == 'Approved' ? 'selected' : NULL}}>Approved</option>
									  <option value="Rejected" {{old('date_code_prnt',$tube->extr_wshr) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								  </select>
								  <span class="text-danger">{{ $errors->first('date_code_prnt') }}</span>
								</div>

								  <div class="mb-3">
									  <label class="form-label" for="prod">Select  Production Result</label>
									<select class="form-select @error('prod') is-invalid @enderror" name="prod" id="prod">
										<option value="none">--Select Inspection Result--</option>
										<option value="Approved" {{old('prod',$tube->prod) == 'Approved' ? 'selected' : NULL}}>Approved</option>
										<option value="Rejected" {{old('prod',$tube->prod) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
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
