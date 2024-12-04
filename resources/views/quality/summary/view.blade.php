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
								<li class="breadcrumb-item active" aria-current="page">Summary</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
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
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">

                            <div class="col">
								<select class="slct_inspct_rcrd form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Select Inline Results--</option>
									<option value="http://qa.test/admin/inline/tfuelCG125">Tube Fuel CG-125 Results </option></a>
									<option value="http://qa.test/admin/inline/tfuelCD-70">Tube Fuel CD-70 Results </option>
                                       <option value="http://qa.test/admin/inline/tfuelCD-100">View Tube Fuel CD-100 Results</option>
                                       <option value="http://qa.test/admin/inline/tubeCompFuelDeluxe">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="http://qa.test/admin/inline/tASV-CG125">Tube ASV CG-125 Results</option>
                                       <option value="http://qa.test/admin/inline/tbBreather-CD70">Tube B Breather CD-70 Results </option>
                                       <option value="http://qa.test/admin/inline/tbBreather-CG125">Tube B Breather CG-125 Results</option>
                                       <option value="http://qa.test/admin/inline/taBreather-CG125">Tube A Breather CG-125 Results</option>
                                       <option value="http://qa.test/admin/inline/tSuctionCG125">Tube Suction CG-125 Results</option>
                                       <option value="http://qa.test/admin/inline/t8X150CG125">Tube 8 X 150 CG-125 Results</option>
                                       <option value="http://qa.test/admin/inline/tBreatherPridor">Tube Breather Pridor Results</option>
                                       <option value="http://qa.test/admin/inline/tBreatherDeluxe">Tube Breather Deluxe Results</option>
                                       <option value="http://qa.test/admin/inline/t4X440KOKA">Tube 4 X 440 KOKA Results</option>
                                       <option value="http://qa.test/admin/inline/tBreatherKOKA">Tube Breather KOKA Results</option>
                                       <option value="http://qa.test/admin/inline/tSuctionKOKA">Tube Suction KOKA Results</option>
                                       <option value="http://qa.test/admin/inline/CshnFrntFuelTnkDLX">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="http://qa.test/admin/inline/RbrMflrMntDLX">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="http://qa.test/admin/inline/GrmtSideCvrDLX">Grommet Side Cover Deluxe Results</option>
                                       <option value="http://qa.test/admin/inline/GrmtARearCvrCD100">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="http://qa.test/admin/inline/RbrHndlCshnCD100">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="http://qa.test/admin/inline/UndrRbrHndlCD100">Under Rubber Handle CD-100 Results</option>
                                       <option value="http://qa.test/admin/inline/PckngRbrCD100">Packing Rubber CD-100 Results</option>
                                       <option value="http://qa.test/admin/inline/GrmtCD70">Grommet CD-70 Results</option>
                                       <option value="http://qa.test/admin/inline/GrmtCG125">Grommet CG-125 Results</option>
                                       <option value="http://qa.test/admin/inline/tBtryBreatherDLX">Tube Battery Breather Deluxe Results</option>
                                       <option value="http://qa.test/admin/inline/tBtryBreatherCD70">Tube Battery Breather CD-70 Results</option>
                                       <option value="http://qa.test/admin/inline/tBtryBreatherCG125">Tube Battery Breather CG-125 Results</option>
                                       <option value="http://qa.test/admin/inline/tBtryBreatherCD100">Tube Battery Breather CD-100 Results</option>
                                       <option value="http://qa.test/admin/inline/tBtryBreatherKSW">Tube Battery Breather KSW Results</option>
                                       <option value="http://qa.test/admin/inline/tBtryBreatherKOKA">Tube Battery Breather KOKA Results</option>
                                       <option value="http://qa.test/admin/inline/tCompfuelKOKA">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
							<div class="col">
								<select class="slct_inspct_rcrd form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Select Final Results Record--</option>
									<option value="http://qa.test/admin/product/tfuelCG-125">Tube Fuel CG-125 Results </option></a>
									<option value="http://qa.test/admin/product/tfuelCD-70">Tube Fuel CD-70 Results </option>
                                       <option value="http://qa.test/admin/product/tfuelCD-100">View Tube Fuel CD-100 Results</option>
                                       <option value="http://qa.test/admin/product/tubeCompFuelDeluxe">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="http://qa.test/admin/product/tASV-CG125">Tube ASV CG-125 Results</option>
                                       <option value="http://qa.test/admin/product/tbBreather-CD70">Tube B Breather CD-70 Results </option>
                                       <option value="http://qa.test/admin/product/tbBreather-CG125">Tube B Breather CG-125 Results</option>
                                       <option value="http://qa.test/admin/product/taBreather-CG125">Tube A Breather CG-125 Results</option>
                                       <option value="http://qa.test/admin/product/tSuctionCG125">Tube Suction CG-125 Results</option>
                                       <option value="http://qa.test/admin/product/t8X150CG125">Tube 8 X 150 CG-125 Results</option>
                                       <option value="http://qa.test/admin/product/tBreatherPridor">Tube Breather Pridor Results</option>
                                       <option value="http://qa.test/admin/product/tBreatherDeluxe">Tube Breather Deluxe Results</option>
                                       <option value="http://qa.test/admin/product/t4X440KOKA">Tube 4 X 440 KOKA Results</option>
                                       <option value="http://qa.test/admin/product/tBreatherKOKA">Tube Breather KOKA Results</option>
                                       <option value="http://qa.test/admin/product/tSuctionKOKA">Tube Suction KOKA Results</option>
                                       <option value="http://qa.test/admin/product/CshnFrntFuelTnkDLX">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="http://qa.test/admin/product/RbrMflrMntDLX">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="http://qa.test/admin/product/GrmtSideCvrDLX">Grommet Side Cover Deluxe Results</option>
                                       <option value="http://qa.test/admin/product/GrmtARearCvrCD100">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="http://qa.test/admin/product/RbrHndlCshnCD100">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="http://qa.test/admin/product/UndrRbrHndlCD100">Under Rubber Handle CD-100 Results</option>
                                       <option value="http://qa.test/admin/product/PckngRbrCD100">Packing Rubber CD-100 Results</option>
                                       <option value="http://qa.test/admin/product/GrmtCD70">Grommet CD-70 Results</option>
                                       <option value="http://qa.test/admin/product/GrmtCG125">Grommet CG-125 Results</option>
                                       <option value="http://qa.test/admin/product/tBtryBreatherDLX">Tube Battery Breather Deluxe Results</option>
                                       <option value="http://qa.test/admin/product/tBtryBreatherCD70">Tube Battery Breather CD-70 Results</option>
                                       <option value="http://qa.test/admin/product/tBtryBreatherCG125">Tube Battery Breather CG-125 Results</option>
                                       <option value="http://qa.test/admin/product/tBtryBreatherCD100">Tube Battery Breather CD-100 Results</option>
                                       <option value="http://qa.test/admin/product/tBtryBreatherKSW">Tube Battery Breather KSW Results</option>
                                       <option value="http://qa.test/admin/product/tBtryBreatherKOKA">Tube Battery Breather KOKA Results</option>
                                       <option value="http://qa.test/admin/product/tCompfuelKOKA">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
							<div class="col">
								<select class=" form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Monthly Results--</option>
									<option value="http://qa.test/admin/monthly/tfuelCG125">Tube Fuel CG-125 Results </option></a>
									<option value="http://qa.test/admin/monthly/tfuelCD-70">Tube Fuel CD-70 Results </option>
                                       <option value="http://qa.test/admin/monthly/tfuelCD-100">View Tube Fuel CD-100 Results</option>
                                       <option value="http://qa.test/admin/monthly/tCompFuelDLX">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="http://qa.test/admin/monthly/tASV-CG125">Tube ASV CG-125 Results</option>
                                       <option value="http://qa.test/admin/monthly/tbBreather-CD70">Tube B Breather CD-70 Results </option>
                                       <option value="http://qa.test/admin/monthly/tbBreather-CG125">Tube B Breather CG-125 Results</option>
                                       <option value="http://qa.test/admin/monthly/taBreather-CG125">Tube A Breather CG-125 Results</option>
                                       <option value="http://qa.test/admin/monthly/tSuctionCG125">Tube Suction CG-125 Results</option>
                                       <option value="http://qa.test/admin/monthly/t8X150CG125">Tube 8 X 150 CG-125 Results</option>
                                       <option value="http://qa.test/admin/monthly/tBreatherPridor">Tube Breather Pridor Results</option>
                                       <option value="http://qa.test/admin/monthly/tBreatherDeluxe">Tube Breather Deluxe Results</option>
                                       <option value="http://qa.test/admin/monthly/t4X440KOKA">Tube 4 X 440 KOKA Results</option>
                                       <option value="http://qa.test/admin/monthly/tBreatherKOKA">Tube Breather KOKA Results</option>
                                       <option value="http://qa.test/admin/monthly/tSuctionKOKA">Tube Suction KOKA Results</option>
                                       <option value="http://qa.test/admin/monthly/CshnFrntFuelTnkDLX">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="http://qa.test/admin/monthly/RbrMflrMntDLX">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="http://qa.test/admin/monthly/GrmtSideCvrDLX">Grommet Side Cover Deluxe Results</option>
                                       <option value="http://qa.test/admin/monthly/GrmtARearCvrCD100">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="http://qa.test/admin/monthly/RbrHndlCshnCD100">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="http://qa.test/admin/monthly/UndrRbrHndlCD100">Under Rubber Handle CD-100 Results</option>
                                       <option value="http://qa.test/admin/monthly/PckngRbrCD100">Packing Rubber CD-100 Results</option>
                                       <option value="http://qa.test/admin/monthly/GrmtCD70">Grommet CD-70 Results</option>
                                       <option value="http://qa.test/admin/monthly/GrmtCG125">Grommet CG-125 Results</option>
                                       <option value="http://qa.test/admin/monthly/tBtryBreatherDLX">Tube Battery Breather Deluxe Results</option>
                                       <option value="http://qa.test/admin/monthly/tBtryBreatherCD70">Tube Battery Breather CD-70 Results</option>
                                       <option value="http://qa.test/admin/monthly/tBtryBreatherCG125">Tube Battery Breather CG-125 Results</option>
                                       <option value="http://qa.test/admin/monthly/tBtryBreatherCD100">Tube Battery Breather CD-100 Results</option>
                                       <option value="http://qa.test/admin/monthly/tBtryBreatherKSW">Tube Battery Breather KSW Results</option>
                                       <option value="http://qa.test/admin/monthly/tBtryBreatherKOKA">Tube Battery Breather KOKA Results</option>
                                       <option value="http://qa.test/admin/monthly/tCompfuelKOKA">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
						</div>
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="col-6">

                                <form method="get" action="{{route('search.summary')}}">
                                    <div class="d-lg-flex">
                                        <div class="col-8">
                                            <input type="search" name="search" class="form-control" placeholder="Search By Month Date" value="{{$data}}">

                                        </div>
                                        <div class="ms-2">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                        <div class="ms-2">
                                            <a href="{{route('monthly.summary.index')}}">
                                            <button type="button" class="btn btn-danger">Reset</button>
                                            </a>
                                        </div>
                                    </div>

                                </form>

                            </div>
						  <div class="ms-auto"><a href="/qa/summary/quality/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Inspection Record</a></div>

                        </div>
						@if($records->count() > 0)
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>#</th>
                                        <th>Month</th>
										<th>Part Name</th>
                                        <th>Final Inspection Rejection</th>
                                        <th>Produced Quantity</th>
										<th>Inspected Quantity</th>
										<th>Actions</th>
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
                                                <h6 class="mb-0 font-14">{{$record->sr_no}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$record->month}}</td>
                                    <td>{{$record->part_name}}</td>
                                    <td>{{$record->fnl_inspct_rjct}}</td>
                                    <td>{{$record->prod_qty}}</td>
									<td>{{$record->inspct_qty}}</td>

                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="/qa/summary/quality/{{$record->sr_no}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/qa/summary/quality/{{$record->sr_no}}">
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
                        <div>
                            <h6>Total Rejections : <span class="text-danger">{{$finalRejections}} Rejected</span> </h6>

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

