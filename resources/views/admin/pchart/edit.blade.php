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
								<li class="breadcrumb-item active" aria-current="page">Edit P Chart Result</li>
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
			  <form method="post" action="/admin/pchart/{{$chart->id}}">
				@csrf
				{{method_field('put')}}
				<div class="card">
				  <div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<div>
							<h5 class="card-title">Add P Chart Result</h5>
						</div>

					</div>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							  <div class="mb-3">
								<label for="date" class="form-label">Select  Date</label>
								<input type="date" value="{{old('date',$chart->date)}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('date') }}</span>
							  </div>

                              <div class="mb-3">
								<label class="form-label" for="part_no">Enter Part Number</label>
								<input type="text" class="form-control @error('part_no') is-invalid @enderror" value="{{old('part_no',$chart->part_no)}}" name="part_no" placeholder="Enter Part Number">
								<span class="text-danger">{{ $errors->first('part_no') }}</span>
							  </div>
                              <div class="mb-3">
								<label class="form-label" for="part_name">Enter Part Name</label>
								<input type="text" class="form-control @error('part_name') is-invalid @enderror" value="{{old('part_name',$chart->part_name)}}" name="part_name" placeholder="Enter Part Name">
								<span class="text-danger">{{ $errors->first('part_name') }}</span>
							  </div>

                             <div class="mb-3">
									<label class="form-label" for="descp">Write Description</label>
									<textarea class="form-control @error('descp') is-invalid @enderror" value="{{old('descp',$chart->descp)}}" name="descp" id="descp" cols="30" rows="5">
                                    	{{old('descp',$chart->descp)}}
                                	</textarea>
									<span class="text-danger">{{ $errors->first('descp') }}</span>
							</div>

							  <div class="mb-3">
								<label class="form-label" for="pin_hole">Enter Pin Hole Value</label>
								<input type="number" class="form-control @error('pin_hole') is-invalid @enderror" value="{{old('pin_hole',$chart->pin_hole)}}" name="pin_hole" placeholder="Enter Pin Hole Value">
								<span class="text-danger">{{ $errors->first('pin_hole') }}</span>
							  </div>


							 <div class="mb-3">
								<label class="form-label" for="air_bbl">Enter Air Bubble Value</label>
								<input type="number" class="form-control @error('air_bbl') is-invalid @enderror" value="{{old('air_bbl',$chart->air_bbl)}}" name="air_bbl" placeholder="Enter Air Bubble Value">
								<span class="text-danger">{{ $errors->first('air_bbl') }}</span>
							  </div>

							   <div class="mb-3">
								<label class="form-label" for="clr_out">Enter Color Out Value</label>
								<input type="number" class="form-control @error('clr_out') is-invalid @enderror" value="{{old('clr_out',$chart->clr_out)}}" name="clr_out" placeholder="Enter Color Out Value">
								<span class="text-danger">{{ $errors->first('clr_out') }}</span>
							  </div>

							</div>
						</div>
							  <div class="col-lg-4">
								<div class="border border-3 p-4 rounded">







									  <div class="mb-3">
								<label class="form-label" for="taper_ctng">Enter Taper Cutting Value</label>
								<input type="number" class="form-control @error('taper_ctng') is-invalid @enderror" value="{{old('taper_ctng',$chart->taper_ctng)}}" name="taper_ctng" placeholder="Enter Taper Cutting Value">
								<span class="text-danger">{{ $errors->first('taper_ctng') }}</span>
							  </div>

									  <div class="mb-3">
                                        <label class="form-label" for="extr_bnd_agnt">Enter Extra Bonding Agent Value</label>
                                        <input type="number" class="form-control @error('extr_bnd_agnt') is-invalid @enderror" value="{{old('extr_bnd_agnt',$chart->extr_bnd_agnt)}}" name="extr_bnd_agnt" placeholder="Enter Extra Bonding Agent Value">
                                        <span class="text-danger">{{ $errors->first('extr_bnd_agnt') }}</span>
                                      </div>

									   <div class="mb-3">
                                        <label class="form-label" for="rst_clp">Enter Rusted Clip Value</label>
                                        <input type="number" class="form-control @error('rst_clp') is-invalid @enderror" value="{{old('rst_clp',$chart->rst_clp)}}" name="rst_clp" placeholder="Enter Rusted Clip Value">
                                        <span class="text-danger">{{ $errors->first('rst_clp') }}</span>
                                      </div>

									   <div class="mb-3">
                                        <label class="form-label" for="ms_prnt">Enter Miss Printing Value</label>
                                        <input type="number" class="form-control @error('ms_prnt') is-invalid @enderror" value="{{old('ms_prnt',$chart->ms_prnt)}}" name="ms_prnt" placeholder="Enter Miss Printing Value">
                                        <span class="text-danger">{{ $errors->first('ms_prnt') }}</span>
                                      </div>


									<div class="mb-3">
										<label class="form-label" for="notes">Write Notes</label>
										<textarea class="form-control @error('notes') is-invalid @enderror" value="{{old('notes')}}" name="notes" id="notes" cols="30" rows="5">
                                    		{{old('notes',$chart->notes)}}
                                		</textarea>
										<span class="text-danger">{{ $errors->first('notes') }}</span>
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
