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
								<li class="breadcrumb-item active" aria-current="page">Capability Report</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">


                            <div class="d-lg-flex align-items-center mb-4 gap-3">
								<div class="col-6">

									<form method="get" action="{{route('search.capability')}}">
										<div class="d-lg-flex">
											<div class="col-6">
												<label class="form-label ms-1" for="date1">Enter start date <span class="text-danger">*</span></label>
												<input type="date" name="date1" class="form-control">
											</div>
											<div class="col-6 ms-3">
												<label class="form-label ms-1" for="date2">Enter end date <span class="text-danger">*</span></label>
												<input type="date" name="date2" class="form-control">
											</div>
											<div class="ms-4 mt-4">
											<button type="submit" class="btn btn-success mt-1">Search</button>
											</div>
											<div class="ms-2 mt-4">
												<a href="/qa/capability">
												<button type="button" class="btn btn-danger mt-1">Reset</button>
												</a>
											</div>
										</div>

									</form>

								</div>
							  <div class="ms-auto mt-3"><a href="/qa/capability/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Result</a></div>

							</div>

						@if($reports->count() > 0)
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
                                   @foreach ($reports as $report)
                                   <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">{{$report->id}}</h6>
                                            </div>
                                        </div>
                                    </td>
									<td class="text-center">{{$report->date}}</td>
									<td class="text-center">{{$report->part_no}}</td>
									<td class="text-center">{{$report->part_name}}</td>
									<td class="text-center">{{$report->msrng_ins}}</td>
                                    <td class="text-center">{{$report->event}}</td>
									<td class="text-center">{{$report->process_name}}</td>
									<td class="text-center">{{$report->inspector}}</td>
									<td>
										<div class="text-center">
										<button type="button" class="btn btn-sm btn-primary" style="font-size: 10px" data-bs-toggle="modal"
										data-bs-target="#exampleModal{{ $report->id }}">
										View Full Record
									</button>
								</div>
									<div class="modal" tabindex="-1" id="exampleModal{{ $report->id }}" tabindex="-1"
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
												  		<b>Sr#</b> = {{$report->id}}
													</p>
													<p>
													<b>Date</b> = {{$report->date}}
												  </p>
												  <p>
													<b>Part Number</b> = {{$report->part_no}}
												  </p>
												  <p>
													<b>Part Name</b> = {{$report->part_name}}
												  </p>
												  <p>
													<b>Measuring Instrument</b> = {{$report->msrng_ins}}
												  </p>
												  <p>
													<b>Event</b> = {{$report->event}}
												  </p>
												  <p>
													<b>Process Name</b> = {{$report->process_name}}
												  </p>
												  <p>
													<b>Inspector</b> = {{$report->inspector}}
												  </p>
												  <p>
													<b>Incharge</b> = {{$report->incharge}}
												  </p>
												  <p>
													<b>Manager</b> = {{$report->manager}}
												  </p>
												  <p>
													<b>Head</b> = {{$report->head}}
												  </p>
												  <p>
													<b>Inspection Result</b> = {{$report->inspct_rslt}}
												  </p>
												  <p>
													<b>Inspection Data</b> = {{$report->inspct_data}}
												  </p>



											</div>

										</div>
									</div>
								</div>
									</td>

                                    <td class="text-center">
                                        <div class="d-flex justify-content-center order-actions">
                                            <a href="/qa/capability/{{$report->id}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/qa/capability/{{$report->id}}">
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

                            {!! $reports->withQueryString()->links('pagination::bootstrap-5') !!}
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

