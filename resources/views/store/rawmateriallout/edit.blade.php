
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
								<li class="breadcrumb-item active" aria-current="page">Raw Material</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<form method="POST" action="{{  route('raw-materialout.update', $rawmaterial->id )}}">
    @method('PUT')
    @csrf
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Edit Raw Materials</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">


                               <div class="mb-3">
                                 <label for="s_no" class="form-label">Serial No:</label>
                                 <input type="integer" value="{{old('s_no',$rawmaterial->s_no)}}" class="form-control @error('s_no') is-invalid @enderror"  id="s_no" name="s_no" readonly>
                                 <span class="text-danger">{{ $errors->first('s_no') }}</span>

                               </div>

                               <div class="mb-3">
                                <label for="date" class="form-label">Date Quantity In</label>
                                <input type="date" value="{{old('date',$rawmaterial->date)}}" class="form-control @error('date') is-invalid @enderror"  id="date" name="date" readonly>
                                <span class="text-danger">{{ $errors->first('date') }}</span>

                              </div>

                              <div class="mb-3">
                                <label for="dscp" class="form-label">Description Of Goods</label>
                               <textarea name="dscp" id="dscp" class="form-control @error('dscp') is-invalid @enderror" cols="5" rows="5" readonly> {{old('dscp',$rawmaterial->dscp)}}</textarea>
                                <span class="text-danger">{{ $errors->first('dscp') }}</span>

                              </div>

                               <div class="mb-3">
                                 <label for="d_c" class="form-label">Delivery Chalan:</label>
                                 <input type="integer" value="{{old('d_c',$rawmaterial->d_c)}}" class="form-control @error('d_c') is-invalid @enderror" id="d_c" name="d_c" readonly>
                                 <span class="text-danger">{{ $errors->first('d_c') }}</span>

                               </div>

                               <div class="mb-3">
                                <label for="qty_in" class="form-label">Quantity In:</label>
                                <input type="integer" value="{{old('qty_in',$rawmaterial->qty_in)}}" class="form-control @error('qty_in') is-invalid @enderror" id="qty_in" name="qty_in" readonly>
                                <span class="text-danger">{{ $errors->first('qty_in') }}</span>

                              </div>

                              <div class="mb-3">
                                <label for="date_out" class="form-label">Date Quantity Out</label>
                                <input type="date" value="{{old('date_out',$rawmaterial->date_out)}}" class="form-control @error('date_out') is-invalid @enderror"  id="date_out" name="date_out">
                                <span class="text-danger">{{ $errors->first('date_out') }}</span>

                              </div>

                              <div class="mb-3">
                                <label for="qty_out" class="form-label">Quantity Out:</label>
                                <input type="integer" value="{{old('qty_out',$rawmaterial->qty_out)}}" class="form-control @error('qty_out') is-invalid @enderror" id="qty_out" name="qty_out">
                                <span class="text-danger">{{ $errors->first('qty_out') }}</span>

                              </div>

                              {{-- <div class="mb-3">
                                <label for="blc" class="form-label">Balance:</label>
                                <input type="integer" value="{{old('blc',$rawmaterial->blc)}}" class="form-control @error('blc') is-invalid @enderror" id="blc" name="blc">
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
