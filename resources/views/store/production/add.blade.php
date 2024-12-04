
@extends('admin.layout.master');
@section('main-content')
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
					
				</div>
				<!--end breadcrumb-->
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add Production Item</h5>
					  <hr/>
					  <form  action="/admin/store/subsupplier/production" method="POST">
						@csrf
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
						
                              <div class="mb-3">
                                <label for="production" class="form-label">Production Item </label>
                                <select class=" form-select @error('production') is-invalid @enderror"  name="production" id="production">
									    <option value="none">--Item Name--</option>
                                 @foreach($products as $product)
                                 <option value="{{ $product->product }}"> {{ $product->product }}</option>
                                 @endforeach
								</select>
                                <span class="text-danger">{{$errors->first('production')}}</span>
                              </div>

                              
                <div class="mb-3">
                                <label for="vendor" class="form-label">Vendor Name </label>
                                <select class=" form-select @error('vendor') is-invalid @enderror"  name="vendor" id="vendor">
									    <option value="none">--Item Name--</option>
                                       @foreach($vendors as $vendor)
                                     <option value="{{ $vendor->name }}">{{ $vendor->name }}</option>
                                         @endforeach
						   		</select>
                                <span class="text-danger">{{$errors->first('vendor')}}</span>
                                </div>
                              
                              <div class="mb-3">
								<label for="issue" class="form-label">Total Issue</label>
								<input type="integer" value="{{old('issue')}}" class="form-control @error('issue') is-invalid @enderror" id="issue" name="issue">
								<span class="text-danger">{{ $errors->first('issue') }}</span>

							  </div>
                              <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
							  
                            </div>
						   </div>
						  
                        </div>
					   </div>
					</form>
					</div>
					</div>
				  </div>
			  </div>


		<!--end page wrapper -->
@endsection