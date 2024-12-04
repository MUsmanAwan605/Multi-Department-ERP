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
								<li class="breadcrumb-item active" aria-current="page">X-R Chart</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">

                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="col-6">

                                <form method="get" action="{{route('search.xr')}}">
                                    <div class="d-lg-flex">
                                        <div class="col-6">
											<label class="form-label ms-1" for="date1">Enter start date <span class="text-danger">*</span></label>
                                            <input type="date" name="date1" value="{{$date1}}" class="form-control">
                                        </div>
										<div class="col-6 ms-3">
											<label class="form-label ms-1" for="date2">Enter end date <span class="text-danger">*</span></label>
                                            <input type="date" name="date2" value="{{$date2}}" class="form-control">
										</div>
                                        <div class="ms-4 mt-4">
                                        <button type="submit" class="btn btn-success mt-1">Search</button>
                                        </div>
                                        <div class="ms-2 mt-4">
                                            <a href="/qa/XR">
                                            <button type="button" class="btn btn-danger mt-1">Reset</button>
                                            </a>
                                        </div>
                                    </div>

                                </form>

                            </div>
						  <div class="ms-auto"><a href="/qa/XR/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Result</a></div>

                        </div>
						@if($records->count() > 0)
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th class="text-center">Sr#</th>
										<th class="text-center">Day</th>
										<th class="text-center">Month</th>
										<th class="text-center">Year</th>
										<th class="text-center">Lot Number</th>
										<th class="text-center">Lot Size</th>
										<th class="text-center">X1</th>
										<th class="text-center">X2</th>
										<th class="text-center">X3</th>
										<th class="text-center">X4</th>
										<th class="text-center">X5</th>
										<th class="text-center">Total</th>
										<th class="text-center">Mean</th>
										<th class="text-center">Range</th>
										<th class="text-center">Confirmation</th>
										<th class="text-center">View Full Record</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
                                   @foreach ($records as $record)
                                   <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">{{$record->id}}</h6>
                                            </div>
                                        </div>
                                    </td>
									<td class="text-center">{{$record->day}}</td>
									<td class="text-center">{{$record->month}}</td>
									<td class="text-center">{{$record->year}}</td>
									<td class="text-center">{{$record->lot_no}}</td>
									<td class="text-center">{{$record->lot_size}}</td>
                                    <td class="text-center">{{$record->X1}}</td>
                                    <td class="text-center">{{$record->X2}}</td>
                                    <td class="text-center">{{$record->X3}}</td>
                                    <td class="text-center">{{$record->X4}}</td>
                                    <td class="text-center">{{$record->X5}}</td>
                                    <td class="text-center">{{$record->total}}</td>
                                    <td class="text-center">{{$record->mean}}</td>
                                    <td class="text-center">{{$record->range}}</td>
                                    <td class="text-center">{{$record->confirmation}}</td>
									<td>
										<div class="text-center">
										<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
										data-bs-target="#exampleModal{{ $record->id }}" style="font-size: 10px">
										View Full Record
									</button>
								</div>
									<div class="modal" tabindex="-1" id="exampleModal{{ $record->id }}" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog ">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">X-R Chart</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<p>
												  <b>Sr#</b> = {{$record->id}}
												</p>
												<p>
												  <b>Day</b> = {{$record->day}}
												</p>
												<p>
												  <b>Month</b> = {{$record->month}}
												</p>
												<p>
												  <b>Year</b> = {{$record->year}}
												</p>
												<p>
												  <b>Lot Number</b> = {{$record->lot_no}}
												</p>
												<p>
												  <b>Lot Size</b> = {{$record->lot_size}}
												</p>
												<p>
												  <b>X1</b> = {{$record->X1}}
												</p>
												<p>
													<b>X2</b> = {{$record->X2}}
												  </p>
												  <p>
													<b>X3</b> = {{$record->X3}}
												  </p>
												  <p>
													<b>X4</b> = {{$record->X4}}
												  </p>
												  <p>
													<b>X5</b> = {{$record->X5}}
												  </p>
												  <p>
													<b>Total</b> = {{$record->total}}
												  </p>
												  <p>
													<b>Mean</b> = {{$record->mean}}
												  </p>
												  <p>
													<b>Range</b> = {{$record->range}}
												  </p>
												  <p>
													<b>Confirmation</b> = {{$record->confirmation}}
												  </p>
												  <p>
													<b>Notes</b> = {{$record->notes}}
												  </p>
												  <p>
													<b>Supplier or Process Zone</b> = {{$record->sup_prcs_zone}}
												  </p>
												  <p>
													<b>Part Number</b> = {{$record->part_no}}
												  </p>
												  <p>
													<b>Part Name</b> = {{$record->part_name}}
												  </p>

												  <p>
													<b>Suality Characterstics</b> = {{$record->su_chrctr}}
												  </p>

												  <p>
													<b>Standard</b> = {{$record->stndrd}}
												  </p>
												  <p>
													<b>Sampling Frequency</b> = {{$record->smpl_frqncy}}
												  </p>
												  <p>
													<b>Measuring Equipment</b> = {{$record->msrng_eqp}}
												  </p>




											</div>

										</div>
									</div>
								</div>
									</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center order-actions">
                                            <a href="/qa/XR/{{$record->id}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/qa/XR/{{$record->id}}">
												@csrf
												{{method_field('DELETE')}}
												<button type="submit" class="ms-2" style="padding: 6px 10px;outline:none;border:none;border-radius:5px;">
                                                    <i class='bx bxs-trash'></i>
												</button>
                      </form>
					</div>
                                    </td>
                                </tr>

                                   @endforeach


								</tbody>
							</table>
						</div>
						<div class="mt-3">

                            {!! $records->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
						<div class="row col-lg-12">
							<div class="ms-3 col-lg-2">
								<h6>UCL(X-Chart) :<span class="text-success"> {{$X_UCL}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>UCL(R-Chart) :<span class="text-success"> {{$R_UCL}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>LCL(X-Chart) :<span class="text-success"> {{$X_LCL}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>LCL(R-Chart) :<span class="text-success"> {{$R_LCL}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>X_bar :<span class="text-success"> {{$ttl_mean}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Range :<span class="text-success"> {{$overallRange}}</span></h6>
							</div>

							<div class="ms-3 col-lg-2">
								<h6>Total (Xi-Xbar)² :<span class="text-success"> {{$ttl_Xi_Xbar_sq}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>USL :<span class="text-success"> {{$USL}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>LSL :<span class="text-success"> {{$LSL}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>VAR :<span class="text-success"> {{$var}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>ST.DEV :<span class="text-success"> {{$st_dev}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>CP :<span class="text-success"> {{$cp}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Cpu :<span class="text-success"> {{$cpu}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Cpl :<span class="text-success"> {{$cpl}}</span></h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Cpk :<span class="text-success"> {{$cpk}}</span></h6>
							</div>

					</div>

					<div class="row p-3 mt-3">
						<div class="col-xl-6">
							<div class="card mb-4">
								<div class="card-header">
									<i class="fas fa-chart-bar me-1"></i>
									<h6 class="text-danger"><u>X Chart</u> </h6>
								</div>
								<div class="card-body"><canvas id="mychart1" ></canvas></div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card mb-4">
								<div class="card-header">
									<i class="fas fa-chart-bar me-1"></i>
									<h6 class="text-primary"><u>R Chart</u> </h6>

								</div>
								<div class="card-body"><canvas id="mychart2" ></canvas></div>
							</div>
						</div>
					</div>


				</div>
					@else

					<div class="alert alert-danger">No record found</div>

				@endif
				</div>


			</div>
		</div>
		<!--end page wrapper -->

		<script type="text/javascript">
			var _xdata = JSON.parse('{!! json_encode($meanIds) !!}');
			var _ydata = JSON.parse('{!! json_encode($meanValues) !!}');
			var _xdata2 = JSON.parse('{!! json_encode($rangeIds) !!}');
			var _ydata2 = JSON.parse('{!! json_encode($rangeValues) !!}');
			</script>

	   <script src="{{asset('qa/assets/js/myindex.js')}}"></script>
@endsection

