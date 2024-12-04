

@extends('store.store_dashboard')
@section('store')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Store</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Raw Materials</li>
							</ol>
						</nav>
					</div>
					<!-- <div class="ms-auto">
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
					</div> -->
				</div>
				<!--end breadcrumb-->
			  <form method="POST" action="{{route('raw-materialout.index')}}" >
				 @csrf
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add Raw Materials</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
                               <div class="mb-3">
                                 <label for="s_no" class="form-label">Serial Number</label>
                                 <input type="integer" value="{{old('s_no')}}" class="form-control @error('s_no') is-invalid @enderror" id="s_no" name="s_no">
                                 <span class="text-danger">{{ $errors->first('s_no') }}</span>

                               </div>

                               <div class="mb-3">
                                 <label for="date" class="form-label">Date</label>
                                 <input type="date" value="{{old('date')}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date">
                                 <span class="text-danger">{{ $errors->first('date') }}</span>

                               </div>

                               {{-- <div class="mb-3">
                                 <label for="dscp" class="form-label">Description Of Goods</label>
                                <textarea name="dscp" id="dscp" value="{{old('descp')}}" class="form-control @error('descp') is-invalid @enderror" cols="5" rows="5"></textarea>
                                 <span class="text-danger">{{ $errors->first('descp') }}</span>

                               {{-- </div>  --}}

                              {{-- <div class="mb-3">
								<label for="d_c" class="form-label">Delivery Chalan</label>
								<input type="integer" value="{{old('d_c')}}" class="form-control @error('d_c') is-invalid @enderror" id="d_c" name="d_c">
								<span class="text-danger">{{ $errors->first('d_c') }}</span>

							  </div> --}}

                              {{-- <div class="mb-3">
								<label for="qty_in" class="form-label">Quantity In</label>
								<input type="integer" value="{{old('qty_in')}}" class="form-control @error('qty_in') is-invalid @enderror" id="qty_in" name="qty_in">
								<span class="text-danger">{{ $errors->first('qty_in') }}</span>

							  </div> --}}

                              <div class="mb-3">
								<label for="blc" class="form-label">Quantity Out</label>
								<input type="integer" value="{{old('qty_out')}}" class="form-control @error('qty_out') is-invalid @enderror" id="qty_out" name="qty_out">
								<span class="text-danger">{{ $errors->first('qty_out') }}</span>

							  </div>

                              {{-- <div class="mb-3">
								<label for="blc" class="form-label">Balance</label>
								<input type="integer" value="{{old('blc')}}" class="form-control @error('blc') is-invalid @enderror" id="blc" name="blc">
								<span class="text-danger">{{ $errors->first('blc') }}</span>

							  </div> --}}

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
