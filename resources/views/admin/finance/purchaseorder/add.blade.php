@extends('admin.admin_dashboard')
@section('admin')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Purchase Order</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Purchase Order</li>
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
			  <form method="POST" action="{{ route('adminfinance.orders.store') }}" >

				@csrf
				<div class="card">



				  <div class="card-body p-4">
					  <h5 class="card-title">Add Order</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">

                            <div class="mb-3">
								<label for="date" class="form-label">Date</label>
								<input type="date"  class="form-control @error('date') is-invalid @enderror" id="date" name="date">
								<span class="text-danger">{{ $errors->first('date') }}</span>
							  </div>


                               <div class="mb-3">
                                 <label for="ordrnum" class="form-label">Order Number</label>
                                 <input type="text"  class="form-control @error('ordrnum') is-invalid @enderror" id="ordrnum" name="ordrnum">
                                 <span class="text-danger">{{ $errors->first('ordrnum') }}</span>

                               </div>

                               <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text"  class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                                <span class="text-danger">{{ $errors->first('title') }}</span>

                              </div>

                               {{-- <div class="mb-3">
                                 <label for="raw" class="form-label">Raw Materials</label>
                                 <input type="integer"  class="form-control @error('raw') is-invalid @enderror" id="raw" name="raw">
                                 <span class="text-danger">{{ $errors->first('raw') }}</span>
                               </div> --}}

                              {{-- <div class="mb-3">
								<label for="amount" class="form-label">Amount</label>
								<input type="integer" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount">
								<span class="text-danger">{{ $errors->first('amount') }}</span>
							  </div> --}}


                              <div class="mb-3">
								<label for="qty" class="form-label">Quantity</label>
								<input type="integer" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty">
								<span class="text-danger">{{ $errors->first('qty') }}</span>
							  </div>

                              <div class="mb-3">
                                <label for="department" class="form-label">Department</label>
                                <select class="form-select @error('department') is-invalid
                                @enderror" name="department" id="department" aria-label="Default select example">
                                    <option value="none">Open this select Department</option>
                                    @foreach ($departments as $department)
                                    <option value="{{ $department->name }}" {{ old('department') == $department->name ? 'selected': NULL  }}>{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger text-uppercase ">{{ $errors->first('department') }}</span>
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
