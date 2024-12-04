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
								<li class="breadcrumb-item active" aria-current="page">Vendore</li>
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
			  <form method="POST" action="{{route('subsupplier.index')}}" >
				@csrf
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">New Subsupplier</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">


                               <div class="mb-3">
                                 <label for="spname" class="form-label">Name</label>
                                 <input type="text" value="{{old('spname')}}" class="form-control @error('spname') is-invalid @enderror" id="name" name="spname">
                                 <span class="text-danger">{{ $errors->first('spname') }}</span>

                               </div>

                               <div class="mb-3">
								<label for="cname" class="form-label">Company Name</label>
								<input type="text" value="{{old('cname')}}" class="form-control @error('cname') is-invalid @enderror" id="cname" name="cname">
								<span class="text-danger">{{ $errors->first('cname') }}</span>
							  </div>
                              <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                                <span class="text-danger">{{ $errors->first('email') }}</span>

                              </div>


                              <div class="mb-3">
								<label for="address" class="form-label">Address</label>
								<input type="text" value="{{old('address')}}" class="form-control @error('address') is-invalid @enderror" id="address" name="address">
								<span class="text-danger">{{ $errors->first('address') }}</span>
							  </div>

                              <div class="mb-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="number" value="{{old('contact')}}" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact">
                                <span class="text-danger">{{ $errors->first('contact') }}</span>

                              </div>

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
