@extends('store.store_dashboard')
@section('store')
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
								<li class="breadcrumb-item active" aria-current="page">Production Item</li>
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
			  <form method="POST" action="{{route('storeproduct.index')}}" >
				@csrf
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add Product</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">


                               <div class="mb-3">
                                 <label for="title" class="form-label">Product</label>
                                 <input type="text" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                                 <span class="text-danger">{{ $errors->first('title') }}</span>

                               </div>

									<div class="mb-3">
										<label for="qty" class="form-label">Stock</label>
										<input type="integer" value="{{old('qty')}}" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty">
										<span class="text-danger">{{ $errors->first('qty') }}</span>
									</div>

							  <div class="mb-3">
								<label for="date" class="form-label">Date</label>
								<input type="date" value="{{old('date')}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date">
								<span class="text-danger">{{ $errors->first('date') }}</span>
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
