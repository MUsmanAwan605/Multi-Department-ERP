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
								<li class="breadcrumb-item active" aria-current="page">Add X-R Record</li>
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
			  <form method="post" action="/qa/XR">
				@csrf
				<div class="card">
				  <div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<div>
							<h5 class="card-title">Add X-R Record</h5>
						</div>

					</div>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							  <div class="mb-3">
								<label for="date" class="form-label">Select Measured Date</label>
								<input type="date" value="{{old('date')}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('date') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="lot_no">Lot Number</label>
								<input type="text" class="form-control @error('lot_no') is-invalid @enderror" value="{{old('lot_no')}}" name="lot_no" placeholder="Enter Lot Number">
								<span class="text-danger">{{ $errors->first('lot_no') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="lot_size">Lot Size</label>
								<input type="text" class="form-control @error('lot_size') is-invalid @enderror" value="{{old('lot_size')}}" name="lot_size" placeholder="Enter Lot Size">
								<span class="text-danger">{{ $errors->first('lot_size') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="X1">Enter X1 Measurement</label>
								<input type="text" class="form-control @error('X1') is-invalid @enderror" value="{{old('X1')}}" name="X1" placeholder="Enter X1 measurement">
								<span class="text-danger">{{ $errors->first('X1') }}</span>
							  </div>
							 <div class="mb-3">
								<label class="form-label" for="X2">Enter X2 Measurement</label>
								<input type="text" class="form-control @error('X2') is-invalid @enderror" value="{{old('X2')}}" name="X2" placeholder="Enter X2 measurement">
								<span class="text-danger">{{ $errors->first('X2') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="X3">Enter X3 Measurement</label>
								<input type="text" class="form-control @error('X3') is-invalid @enderror" value="{{old('X3')}}" name="X3" placeholder="Enter X3 measurement">
								<span class="text-danger">{{ $errors->first('X3') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="X4">Enter X4 Measurement</label>
								<input type="text" class="form-control @error('X4') is-invalid @enderror" value="{{old('X4')}}" name="X4" placeholder="Enter X4 measurement">
								<span class="text-danger">{{ $errors->first('X4') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="X5">Enter X5 Measurement</label>
								<input type="text" class="form-control @error('X5') is-invalid @enderror" value="{{old('X5')}}" name="X5" placeholder="Enter X5 measurement">
								<span class="text-danger">{{ $errors->first('X5') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="confirmation">Select Confirmation Result</label>
								<select class="form-select @error('confirmation') is-invalid @enderror" name="confirmation" id="confirmation">
									<option value="none">--Select Confirmation Result--</option>
									<option value="Approved" {{old('confirmation') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('confirmation') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('confirmation') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="notes">Write Notes</label>
								<textarea class="form-control @error('notes') is-invalid @enderror" value="{{old('notes')}}" name="notes" id="notes" cols="30" rows="5">
                                    {{old('notes')}}
                                </textarea>
								<span class="text-danger">{{ $errors->first('notes') }}</span>
							  </div>

							</div>
						</div>
							  <div class="col-lg-4">
								<div class="border border-3 p-4 rounded">




                              <div class="mb-3">
								<label class="form-label" for="sup_prcs_zone">Enter Supplier or Process Zone</label>
								<input type="text" class="form-control @error('sup_prcs_zone') is-invalid @enderror" value="{{old('sup_prcs_zone')}}" name="sup_prcs_zone" placeholder="Enter Supplier or Process Zone">
								<span class="text-danger">{{ $errors->first('sup_prcs_zone') }}</span>
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
									<label class="form-label" for="su_chrctr">Enter Standard</label>
									<select class="form-select @error('su_chrctr') is-invalid @enderror" name="su_chrctr" id="su_chrctr">
										<option value="none">--Select Standard--</option>
										<option value="Outer DIA" {{old('su_chrctr') == 'Outer DIA' ? 'selected' : NULL}}>Outer DIA</option>
										<option value="Inner DIA" {{old('su_chrctr') == 'Inner DIA' ? 'selected' : NULL}}>Inner DIA</option>
									</select>
									<span class="text-danger">{{ $errors->first('su_chrctr') }}</span>
								  </div>

                              <div class="mb-3">
								<label class="form-label" for="stndrd">Enter Standard</label>
								<input type="text" class="form-control @error('stndrd') is-invalid @enderror" value="{{old('stndrd')}}" name="stndrd" placeholder="Enter Standard">
								<span class="text-danger">{{ $errors->first('stndrd') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="smpl_frqncy">Enter Sampling Frequency</label>
								<input type="text" class="form-control @error('smpl_frqncy') is-invalid @enderror" value="{{old('smpl_frqncy')}}" name="smpl_frqncy" placeholder="Enter Sampling Frequency">
								<span class="text-danger">{{ $errors->first('smpl_frqncy') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="msrng_eqp">Enter Measuring Equipment</label>
								<input type="text" class="form-control @error('msrng_eqp') is-invalid @enderror" value="{{old('msrng_eqp')}}" name="msrng_eqp" placeholder="Enter Measuring Equipment">
								<span class="text-danger">{{ $errors->first('msrng_eqp') }}</span>
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
