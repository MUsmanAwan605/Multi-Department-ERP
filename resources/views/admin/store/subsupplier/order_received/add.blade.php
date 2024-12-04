@extends('admin.admin_dashboard')
@section('admin')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-4">
					<div class="breadcrumb-title pe-3">Subsupplier</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Order Recevied</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
			  <form action="/admin/store/subsupplier/order"  method="POST" >


				   @csrf
				<div class="card">
				  <div class=" card-body p-4">
					  <h5  class=" card-title">New Order</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row d-flex justify-content-center">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">

                               <div class="mb-4">
                                 <label for="s_no" class="form-label">Serial No:</label>
                                 <input type="number" value="{{old('s_no')}}" class="form-control @error('s_no') is-invalid @enderror" id="s_no" name="s_no">
                                 <span class="text-danger">{{ $errors->first('s_no') }}</span>

                               </div>

                               <div class="mb-4">
                                 <label for="po_no" class="form-label">Purchase Order No:</label>
                                 <input type="number" value="{{old('po_no')}}" class="form-control @error('po_no') is-invalid @enderror" id="po_no" name="po_no">
                                 <span class="text-danger">{{ $errors->first('po_no') }}</span>

                               </div>
                               <div class="mb-4">
                                 <label for="date" class="form-label">Date</label>
                                 <input type="date" value="{{old('date')}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date">
                                 <span class="text-danger">{{ $errors->first('date') }}</span>

                               </div>

							   <div class="mb-4">
                                <label for="spname" class="form-label">Order By Supplier </label>
                                <select class=" form-select @error('spname') is-invalid @enderror"  name="spname" id="name">
									    <option value="none">--Supplier Name--</option>
								 @foreach($orders as $order)
                                 <option value="{{ $order->spname }}"> {{ $order->spname }}</option>
                                 @endforeach
								</select>
                                <span class="text-danger">{{$errors->first('spname')}}</span>
                              </div>

                               <div class="mb-4">
                                 <label for="dscp" class="form-label">Description</label>
                                 <input type="test" value="{{old('dscp')}}" class="form-control @error('dscp') is-invalid @enderror" id="dscp" name="dscp">
                                 <span class="text-danger">{{ $errors->first('dscp') }}</span>

                               </div>

									<div class="mb-4">
										<label for="d_c" class="form-label">Delivery Chalan</label>
										<input type="number" value="{{old('d_c')}}" class="form-control @error('d_c') is-invalid @enderror" id="d_c" name="d_c">
										<span class="text-danger">{{ $errors->first('d_c') }}</span>
									</div>

							  <div class="mb-4">
								<label for="qty_in" class="form-label">Quantity In:</label>
								<input type="number" value="{{old('qty_in')}}" class="form-control @error('qty_in') is-invalid @enderror" id="qty_in" name="qty_in">
								<span class="text-danger">{{ $errors->first('qty_in') }}</span>
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

				</form>
				  </div>
			  </div>


			</div>
		<!--end page wrapper -->
@endsection
