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
								<li class="breadcrumb-item active" aria-current="page">Tube 4 X 440 KOKA</li>
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
			  <form method="post" action="/admin/product/t4X440KOKA/{{$tube->sr_no}}">
				@csrf
                {{method_field('put')}}
				<div class="card">
				  <div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<div>
							<h5 class="card-title">Edit Inspection Record</h5>
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
								<label class="form-label" for="extr_snl_lyr">Select Extrusion(Single Layer) Result</label>
								<select class="form-select @error('extr_snl_lyr') is-invalid @enderror" name="extr_snl_lyr" id="extr_snl_lyr">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('extr_snl_lyr',$tube->extr_snl_lyr) == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('extr_snl_lyr',$tube->extr_snl_lyr) == 'Rejected'  ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('extr_snl_lyr') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="blnk_ctng">Select Blanck Cutting Result</label>
								<select class="form-select @error('blnk_ctng') is-invalid @enderror" name="blnk_ctng" id="blnk_ctng">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('blnk_ctng',$tube->blnk_ctng) == 'Approved'  ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('blnk_ctng',$tube->blnk_ctng) == 'Rejected'  ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('blnk_ctng') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="vulcan">Select Vulcanization Result</label>
								<select class="form-select @error('vulcan') is-invalid @enderror" name="vulcan" id="vulcan">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('vulcan',$tube->vulcan) == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('vulcan',$tube->vulcan) == 'Rejected'  ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('vulcan') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="washing">Select Washing Result</label>
								<select class="form-select @error('washing') is-invalid @enderror" name="washing" id="washing">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('washing',$tube->washing) == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('washing',$tube->washing) == 'Rejected'  ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('washing') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="fnl_ctng">Select Final Cutting Result</label>
								<select class="form-select @error('fnl_ctng') is-invalid @enderror" name="fnl_ctng" id="fnl_ctng">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('fnl_ctng',$tube->fnl_ctng) == 'Approved'  ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('fnl_ctng',$tube->fnl_ctng) == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('fnl_ctng') }}</span>
							  </div>

							</div>
						</div>
							  <div class="col-4">
								<div class="border border-3 p-4 rounded">


							  <div class="mb-3">
								<label class="form-label" for="clip_asmbl">Select Clip Assembly Result</label>
								<select class="form-select @error('clip_asmbl') is-invalid @enderror" name="clip_asmbl" id="clip_asmbl">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('clip_asmbl',$tube->clip_asmbl) == 'Approved'   ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('clip_asmbl',$tube->clip_asmbl) == 'Rejected'  ?  'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('clip_asmbl') }}</span>
							  </div>

							  <div class="mb-3">
								<label class="form-label" for="prod">Select Production Result</label>
								<select class="form-select @error('prod') is-invalid @enderror" name="prod" id="prod">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('prod',$tube->prod) == 'Approved'  ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('prod',$tube->prod) == 'Rejected'  ? 'selected' : NULL}}>Rejected</option>
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
