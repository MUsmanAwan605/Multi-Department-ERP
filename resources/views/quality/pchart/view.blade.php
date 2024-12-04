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
								<li class="breadcrumb-item active" aria-current="page">P Chart</li>
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

									<form method="get" action="{{route('search.pchart')}}">
										<div class="d-lg-flex">
											<div class="col-6">
												<label class="form-label ms-1" for="date1">Enter start date <span class="text-danger">*</span></label>
												<input type="date" value="{{$date1}}" name="date1" class="form-control">
											</div>
											<div class="col-6 ms-3">
												<label class="form-label ms-1" for="date2">Enter end date <span class="text-danger">*</span></label>
												<input type="date" value="{{$date2}}" name="date2" class="form-control">
											</div>
											<div class="ms-4 mt-4">
											<button type="submit" class="btn btn-success mt-1">Search</button>
											</div>
											<div class="ms-2 mt-4">
												<a href="/qa/pchart">
												<button type="button" class="btn btn-danger mt-1">Reset</button>
												</a>
											</div>
										</div>

									</form>

								</div>
							  <div class="ms-auto mt-3"><a href="/qa/pchart/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Result</a></div>

							</div>

						@if($records->count() > 0)
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th class="text-center">Sr#</th>
										<th class="text-center">Date</th>
										<th class="text-center">Part Number</th>
										<th class="text-center">Part Name</th>
										<th class="text-center">Description</th>
										<th class="text-center">Pin Hole</th>
										<th class="text-center">Air Bubble</th>
										<th class="text-center">Color Out</th>
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
									<td class="text-center">{{$record->date}}</td>
									<td class="text-center">{{$record->part_no}}</td>
									<td class="text-center">{{$record->part_name}}</td>
									<td class="text-center">{{$record->descp}}</td>
                                    <td class="text-center">{{$record->pin_hole}}</td>
									<td class="text-center">{{$record->air_bbl}}</td>
									<td class="text-center">{{$record->clr_out}}</td>
									<td>
										<div class="text-center">
										<button type="button" class="btn btn-sm btn-primary" style="font-size: 10px" data-bs-toggle="modal"
										data-bs-target="#exampleModal{{ $record->id }}">
										View Full Record
									</button>
								</div>
									<div class="modal" tabindex="-1" id="exampleModal{{ $record->id }}" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog ">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Capability Chart</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
													<p>
												  		<b>Sr#</b> = {{$record->id}}
													</p>
													<p>
													<b>Date</b> = {{$record->date}}
												  </p>
												  <p>
													<b>Part Number</b> = {{$record->part_no}}
												  </p>
												  <p>
													<b>Part Name</b> = {{$record->part_name}}
												  </p>
												  <p>
													<b>Description</b> = {{$record->descp}}
												  </p>
												  <p>
													<b>Pin Hole</b> = {{$record->pin_hole}}
												  </p>
												  <p>
													<b>Air Bubble</b> = {{$record->air_bbl}}
												  </p>
												  <p>
													<b>Color Out </b> = {{$record->clr_out}}
												  </p>
												  <p>
													<b>Taper Cutting</b> = {{$record->taper_ctng}}
												  </p>
												  <p>
													<b>Extra Bonding Agent</b> = {{$record->extr_bnd_agnt}}
												  </p>
												  <p>
													<b>Rusted Clip</b> = {{$record->rst_clp}}
												  </p>
												  <p>
													<b>Miss Printing</b> = {{$record->ms_prnt}}
												  </p>
												  <p>
													<b>Number of Problem Units</b> = {{$record->no_prblm_unt}}
												  </p>
												  <p>
													<b>Notes</b> = {{$record->notes}}
												  </p>




											</div>

										</div>
									</div>
								</div>
									</td>

                                    <td class="text-center">
                                        <div class="d-flex justify-content-center order-actions">
                                            <a href="/qa/pchart/{{$record->id}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/qa/pchart/{{$record->id}}">
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
								<h6>Number Processed :<span class="text-success"> 200</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Total Pin Hole :<span class="text-success"> {{$ttl_pin_hole}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Total Color Out :<span class="text-success"> {{$ttl_clr_out}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Total Air Bubble :<span class="text-success"> {{$ttl_air_bbl}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Total Extra Bonding Agent :<span class="text-success"> {{$ttl_extr_bnd_agnt}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Total Rusted Clip :<span class="text-success"> {{$ttl_rst_clp}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Total Miss Printing :<span class="text-success"> {{$ttl_ms_prnt}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Total Taper Cutting :<span class="text-success"> {{$ttl_taper_ctng}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Total Problem Units :<span class="text-success"> {{$ttl_no_prblm}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Problem rate % :<span class="text-success"> {{$prblm_prcnt}}</span> </h6>
							</div>


					</div>

					<div class="row p-3 mt-3">
					<div class="col-xl-6">
							<div class="card mb-4">
								<div class="card-header">
									<i class="fas fa-chart-bar me-1"></i>
									<h6 class="text-primary"><u>P Chart</u> </h6>

								</div>
								<div class="card-body"><canvas id="mychart3" ></canvas></div>
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
			var _xdata3 = JSON.parse('{!! json_encode($prblmIds) !!}');
			var _ydata3 = JSON.parse('{!! json_encode($prblmValues) !!}');
			</script>


	   <script src="{{asset('qa/assets/js/mychart3.js')}}"></script>

@endsection

