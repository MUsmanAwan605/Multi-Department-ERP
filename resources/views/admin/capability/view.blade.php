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
								<li class="breadcrumb-item active" aria-current="page">Capability Report</li>
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

								{{-- <form method="get" action="{{route('adminsearch.capability')}}">
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
											<a href="/admin/capability">
											<button type="button" class="btn btn-danger mt-1">Reset</button>
											</a>
										</div>
									</div>

								</form> --}}

							</div>
						  <div class="ms-auto mt-3"><a href="/admin/capability/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Result</a></div>

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
										<th class="text-center">Measuring Instrument</th>
										<th class="text-center">Event</th>
										<th class="text-center">Process Name</th>
										<th class="text-center">Inspector</th>
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
									<td class="text-center">{{$record->msrng_ins}}</td>
                                    <td class="text-center">{{$record->event}}</td>
									<td class="text-center">{{$record->process_name}}</td>
									<td class="text-center">{{$record->inspector}}</td>
									<td>
										<div class="text-center">
										<button type="button" style="font-size: 10px" class="btn btn-sm btn-primary" data-bs-toggle="modal"
										data-bs-target="#exampleModal{{ $record->id }}">
										View Full Record
									</button>
								</div>
									<div class="modal" tabindex="-1" id="exampleModal{{ $record->id }}" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog ">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Capability Report</h5>
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
													<b>Measuring Instrument</b> = {{$record->msrng_ins}}
												  </p>
												  <p>
													<b>Event</b> = {{$record->event}}
												  </p>
												  <p>
													<b>Process Name</b> = {{$record->process_name}}
												  </p>
												  <p>
													<b>Inspector</b> = {{$record->inspector}}
												  </p>
												  <p>
													<b>Incharge</b> = {{$record->incharge}}
												  </p>
												  <p>
													<b>Manager</b> = {{$record->manager}}
												  </p>
												  <p>
													<b>Head</b> = {{$record->head}}
												  </p>
												  <p>
													<b>Inspection Result</b> = {{$record->inspct_rslt}}
												  </p>
												  <p>
													<b>Inspection Data</b> = {{$record->inspct_data}}
												  </p>



											</div>

										</div>
									</div>
								</div>
									</td>

                                    <td class="text-center">
                                        <div class="d-flex justify-content-center order-actions">
                                            <a href="/admin/capability/{{$record->id}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/admin/capability/{{$record->id}}">
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
								<h6>Part Mean :<span class="text-success"> {{$X_bar}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>USL :<span class="text-success"> {{$max}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>LSL :<span class="text-success"> {{$min}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Samples :<span class="text-success"> {{$no_sample}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>MAX :<span class="text-success"> {{$max}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>MIN :<span class="text-success"> {{$min}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Range :<span class="text-success"> {{$range}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>X Mean :<span class="text-success"> {{$X_bar}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>σ :<span class="text-success"> {{$stdev}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>6σ :<span class="text-success"> {{$stdev_six}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>K :<span class="text-success"> {{$k}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Cp :<span class="text-success"> {{$cp}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Cpk :<span class="text-success"> {{$cpk}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>3σ :<span class="text-success"> {{$stdev_three}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Cp(Upper) :<span class="text-success"> {{$cp_upper}}</span> </h6>
							</div>
							<div class="ms-3 col-lg-2">
								<h6>Cp(Lower) :<span class="text-success"> {{$cp_lower}}</span> </h6>
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
@endsection

