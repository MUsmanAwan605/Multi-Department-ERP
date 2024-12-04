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
								<li class="breadcrumb-item active" aria-current="page">P Chart</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">


                            <div class="d-lg-flex align-items-center mb-4 gap-3">
								<div class="col-6">

									{{-- <form method="get" action="{{route('adminsearch.pchart')}}">
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
												<a href="/admin/pchart">
												<button type="button" class="btn btn-danger mt-1">Reset</button>
												</a>
											</div>
										</div>

									</form> --}}

								</div>
							  <div class="ms-auto mt-3"><a href="/admin/pchart/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Result</a></div>

							</div>

						@if($charts->count() > 0)
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
                                   @foreach ($charts as $chart)
                                   <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">{{$chart->id}}</h6>
                                            </div>
                                        </div>
                                    </td>
									<td class="text-center">{{$chart->date}}</td>
									<td class="text-center">{{$chart->part_no}}</td>
									<td class="text-center">{{$chart->part_name}}</td>
									<td class="text-center">{{$chart->descp}}</td>
                                    <td class="text-center">{{$chart->pin_hole}}</td>
									<td class="text-center">{{$chart->air_bbl}}</td>
									<td class="text-center">{{$chart->clr_out}}</td>
									<td>
										<div class="text-center">
										<button type="button" class="btn btn-sm btn-primary" style="font-size: 10px" data-bs-toggle="modal"
										data-bs-target="#exampleModal{{ $chart->id }}">
										View Full Record
									</button>
								</div>
									<div class="modal" tabindex="-1" id="exampleModal{{ $chart->id }}" tabindex="-1"
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
												  		<b>Sr#</b> = {{$chart->id}}
													</p>
													<p>
													<b>Date</b> = {{$chart->date}}
												  </p>
												  <p>
													<b>Part Number</b> = {{$chart->part_no}}
												  </p>
												  <p>
													<b>Part Name</b> = {{$chart->part_name}}
												  </p>
												  <p>
													<b>Description</b> = {{$chart->descp}}
												  </p>
												  <p>
													<b>Pin Hole</b> = {{$chart->pin_hole}}
												  </p>
												  <p>
													<b>Air Bubble</b> = {{$chart->air_bbl}}
												  </p>
												  <p>
													<b>Color Out </b> = {{$chart->clr_out}}
												  </p>
												  <p>
													<b>Taper Cutting</b> = {{$chart->taper_ctng}}
												  </p>
												  <p>
													<b>Extra Bonding Agent</b> = {{$chart->extr_bnd_agnt}}
												  </p>
												  <p>
													<b>Rusted Clip</b> = {{$chart->rst_clp}}
												  </p>
												  <p>
													<b>Miss Printing</b> = {{$chart->ms_prnt}}
												  </p>
												  <p>
													<b>Number of Problem Units</b> = {{$chart->no_prblm_unt}}
												  </p>
												  <p>
													<b>Notes</b> = {{$chart->notes}}
												  </p>



											</div>

										</div>
									</div>
								</div>
									</td>

                                    <td class="text-center">
                                        <div class="d-flex justify-content-center order-actions">
                                            <a href="/admin/pchart/{{$chart->id}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/admin/pchart/{{$chart->id}}">
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

                            {!! $charts->withQueryString()->links('pagination::bootstrap-5') !!}
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

