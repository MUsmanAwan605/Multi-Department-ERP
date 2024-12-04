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
                                            <a href="/qa/XR">
                                            <button type="button" class="btn btn-danger mt-1">Reset</button>
                                            </a>
                                        </div>
                                    </div>

                                </form>

                            </div>
						  <div class="ms-auto mt-4"><a href="/qa/XR/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Result</a></div>

                        </div>
						@if($charts->count() > 0)
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
										<th class="text-center">Part Name</th>
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
									<td class="text-center">{{$chart->day}}</td>
									<td class="text-center">{{$chart->month}}</td>
									<td class="text-center">{{$chart->year}}</td>
									<td class="text-center">{{$chart->lot_no}}</td>
									<td class="text-center">{{$chart->lot_size}}</td>
                                    <td class="text-center">{{$chart->X1}}</td>
                                    <td class="text-center">{{$chart->X2}}</td>
                                    <td class="text-center">{{$chart->X3}}</td>
                                    <td class="text-center">{{$chart->X4}}</td>
                                    <td class="text-center">{{$chart->X5}}</td>
                                    <td class="text-center">{{$chart->total}}</td>
                                    <td class="text-center">{{$chart->mean}}</td>
                                    <td class="text-center">{{$chart->range}}</td>
                                    <td class="text-center">{{$chart->confirmation}}</td>
                                    <td class="text-center">{{$chart->part_name}}</td>
									<td>
										<div class="text-center">
										<button type="button" class="btn btn-sm btn-primary" style="font-size: 10px" data-bs-toggle="modal"
										data-bs-target="#exampleModal{{ $chart->id }}">
										View Full Record
									</button>
								</div>
									<div class="modal" tabindex="-1" id="exampleModal{{ $chart->id }}" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">X-R Chart</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<p>
												  <b>Sr#</b> = {{$chart->id}}
												</p>
												<p>
												  <b>Day</b> = {{$chart->day}}
												</p>
												<p>
												  <b>Month</b> = {{$chart->month}}
												</p>
												<p>
												  <b>Year</b> = {{$chart->year}}
												</p>
												<p>
												  <b>Lot Number</b> = {{$chart->lot_no}}
												</p>
												<p>
												  <b>Lot Size</b> = {{$chart->lot_size}}
												</p>
												<p>
												  <b>X1</b> = {{$chart->X1}}
												</p>
												<p>
													<b>X2</b> = {{$chart->X2}}
												  </p>
												  <p>
													<b>X3</b> = {{$chart->X3}}
												  </p>
												  <p>
													<b>X4</b> = {{$chart->X4}}
												  </p>
												  <p>
													<b>X5</b> = {{$chart->X5}}
												  </p>
												  <p>
													<b>Total</b> = {{$chart->total}}
												  </p>
												  <p>
													<b>Mean</b> = {{$chart->mean}}
												  </p>
												  <p>
													<b>Range</b> = {{$chart->range}}
												  </p>
												  <p>
													<b>Confirmation</b> = {{$chart->confirmation}}
												  </p>
												  <p>
													<b>Notes</b> = {{$chart->notes}}
												  </p>
												  <p>
													<b>Supplier or Process Zone</b> = {{$chart->sup_prcs_zone}}
												  </p>
												  <p>
													<b>Part Number</b> = {{$chart->part_no}}
												  </p>
												  <p>
													<b>Part Name</b> = {{$chart->part_name}}
												  </p>

												  <p>
													<b>Suality Characterstics</b> = {{$chart->su_chrctr}}
												  </p>

												  <p>
													<b>Standard</b> = {{$chart->stndrd}}
												  </p>
												  <p>
													<b>Sampling Frequency</b> = {{$chart->smpl_frqncy}}
												  </p>
												  <p>
													<b>Measuring Equipment</b> = {{$chart->msrng_eqp}}
												  </p>




											</div>

										</div>
									</div>
								</div>
									</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center order-actions">
                                            <a href="/qa/XR/{{$chart->id}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/qa/XR/{{$chart->id}}">
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






					</div>

					@else

					<div class="alert alert-danger">No record found</div>

				@endif
				</div>



		</div>
		<!--end page wrapper -->


@endsection

