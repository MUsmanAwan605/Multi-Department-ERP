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
								<li class="breadcrumb-item active" aria-current="page">Inline Tube 4.5 X 440 KOKA</li>
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
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
              <div>
								<select class=" form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Inline Results--</option>
									<option value="{{route('inline.tfuelCG125.index')}}">Tube Fuel CG-125 Results </option>
									<option value="{{route('inline.tfuelCD-70.index')}}">Tube Fuel CD-70 Results </option>
                                       <option value="{{route('inline.tfuelCD-100.index')}}">View Tube Fuel CD-100 Results</option>
                                       <option value="{{route('inline.tCompFuelDLX.index')}}">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="{{route('inline.tASV-CG125.index')}}">Tube ASV CG-125 Results</option>
                                       <option value="{{route('inline.tbBreather-CD70.index')}}">Tube B Breather CD-70 Results </option>
                                       <option value="{{route('inline.tbBreather-CG125.index')}}">Tube B Breather CG-125 Results</option>
                                       <option value="{{route('inline.taBreather-CG125.index')}}">Tube A Breather CG-125 Results</option>
                                       <option value="{{route('inline.tSuctionCG125.index')}}">Tube Suction CG-125 Results</option>
                                       <option value="{{route('inline.t8X150CG125.index')}}">Tube 8 X 150 CG-125 Results</option>
                                       <option value="{{route('inline.tBreatherPridor.index')}}">Tube Breather Pridor Results</option>
                                       <option value="{{route('inline.tBreatherDeluxe.index')}}">Tube Breather Deluxe Results</option>
                                       <option value="{{route('inline.t4X440KOKA.index')}}">Tube 4 X 440 KOKA Results</option>
                                       <option value="{{route('inline.tBreatherKOKA.index')}}">Tube Breather KOKA Results</option>
                                       <option value="{{route('inline.tSuctionKOKA.index')}}">Tube Suction KOKA Results</option>
                                       <option value="{{route('inline.CshnFrntFuelTnkDLX.index')}}">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="{{route('inline.RbrMflrMntDLX.index')}}">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="{{route('inline.GrmtSideCvrDLX.index')}}">Grommet Side Cover Deluxe Results</option>
                                       <option value="{{route('inline.GrmtARearCvrCD100.index')}}">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="{{route('inline.RbrHndlCshnCD100.index')}}">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="{{route('inline.UndrRbrHndlCD100.index')}}">Under Rubber Handle CD-100 Results</option>
                                       <option value="{{route('inline.PckngRbrCD100.index')}}">Packing Rubber CD-100 Results</option>
                                       <option value="{{route('inline.GrmtCD70.index')}}">Grommet CD-70 Results</option>
                                       <option value="{{route('inline.GrmtCG125.index')}}">Grommet CG-125 Results</option>
                                       <option value="{{route('inline.tBtryBreatherDLX.index')}}">Tube Battery Breather Deluxe Results</option>
                                       <option value="{{route('inline.tBtryBreatherCD70.index')}}">Tube Battery Breather CD-70 Results</option>
                                       <option value="{{route('inline.tBtryBreatherCG125.index')}}">Tube Battery Breather CG-125 Results</option>
                                       <option value="{{route('inline.tBtryBreatherCD100.index')}}">Tube Battery Breather CD-100 Results</option>
                                       <option value="{{route('inline.tBtryBreatherKSW.index')}}">Tube Battery Breather KSW Results</option>
                                       <option value="{{route('inline.tBtryBreatherKOKA.index')}}">Tube Battery Breather KOKA Results</option>
                                       <option value="{{route('inline.tCompfuelKOKA.index')}}">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
							<div>
								<select class=" form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Final Inspection Results--</option>
									<option value="{{route('final.tfuelCG-125.index')}}">Tube Fuel CG-125 Results </option>
									<option value="{{route('final.tfuelCD-70.index')}}">Tube Fuel CD-70 Results </option>
                                       <option value="{{route('final.tfuelCD-100.index')}}">View Tube Fuel CD-100 Results</option>
                                       <option value="{{route('final.tubeCompFuelDeluxe.index')}}">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="{{route('final.tASV-CG125.index')}}">Tube ASV CG-125 Results</option>
                                       <option value="{{route('final.tbBreather-CD70.index')}}">Tube B Breather CD-70 Results </option>
                                       <option value="{{route('final.tbBreather-CG125.index')}}">Tube B Breather CG-125 Results</option>
                                       <option value="{{route('final.taBreather-CG125.index')}}">Tube A Breather CG-125 Results</option>
                                       <option value="{{route('final.tSuctionCG125.index')}}">Tube Suction CG-125 Results</option>
                                       <option value="{{route('final.t8X150CG125.index')}}">Tube 8 X 150 CG-125 Results</option>
                                       <option value="{{route('final.tBreatherPridor.index')}}">Tube Breather Pridor Results</option>
                                       <option value="{{route('final.tBreatherDeluxe.index')}}">Tube Breather Deluxe Results</option>
                                       <option value="{{route('final.t4X440KOKA.index')}}">Tube 4 X 440 KOKA Results</option>
                                       <option value="{{route('final.tBreatherKOKA.index')}}">Tube Breather KOKA Results</option>
                                       <option value="{{route('final.tSuctionKOKA.index')}}">Tube Suction KOKA Results</option>
                                       <option value="{{route('final.CshnFrntFuelTnkDLX.index')}}">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="{{route('final.RbrMflrMntDLX.index')}}">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="{{route('final.GrmtSideCvrDLX.index')}}">Grommet Side Cover Deluxe Results</option>
                                       <option value="{{route('final.GrmtARearCvrCD100.index')}}">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="{{route('final.RbrHndlCshnCD100.index')}}">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="{{route('final.UndrRbrHndlCD100.index')}}">Under Rubber Handle CD-100 Results</option>
                                       <option value="{{route('final.PckngRbrCD100.index')}}">Packing Rubber CD-100 Results</option>
                                       <option value="{{route('final.GrmtCD70.index')}}">Grommet CD-70 Results</option>
                                       <option value="{{route('final.GrmtCG125.index')}}">Grommet CG-125 Results</option>
                                       <option value="{{route('final.tBtryBreatherDLX.index')}}">Tube Battery Breather Deluxe Results</option>
                                       <option value="{{route('final.tBtryBreatherCD70.index')}}">Tube Battery Breather CD-70 Results</option>
                                       <option value="{{route('final.tBtryBreatherCG125.index')}}">Tube Battery Breather CG-125 Results</option>
                                       <option value="{{route('final.tBtryBreatherCD100.index')}}">Tube Battery Breather CD-100 Results</option>
                                       <option value="{{route('final.tBtryBreatherKSW.index')}}">Tube Battery Breather KSW Results</option>
                                       <option value="{{route('final.tBtryBreatherKOKA.index')}}">Tube Battery Breather KOKA Results</option>
                                       <option value="{{route('final.tCompfuelKOKA.index')}}">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
							<div>
								<select class=" form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Monthly Results--</option>
									<option value="{{route('monthly.tfuelCG125.index')}}">Tube Fuel CG-125 Results </option>
									<option value="{{route('monthly.tfuelCD-70.index')}}">Tube Fuel CD-70 Results </option>
                                       <option value="{{route('monthly.tfuelCD-100.index')}}">View Tube Fuel CD-100 Results</option>
                                       <option value="{{route('monthly.tCompFuelDLX.index')}}">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="{{route('monthly.tASV-CG125.index')}}">Tube ASV CG-125 Results</option>
                                       <option value="{{route('monthly.tbBreather-CD70.index')}}">Tube B Breather CD-70 Results </option>
                                       <option value="{{route('monthly.tbBreather-CG125.index')}}">Tube B Breather CG-125 Results</option>
                                       <option value="{{route('monthly.taBreather-CG125.index')}}">Tube A Breather CG-125 Results</option>
                                       <option value="{{route('monthly.tSuctionCG125.index')}}">Tube Suction CG-125 Results</option>
                                       <option value="{{route('monthly.t8X150CG125.index')}}">Tube 8 X 150 CG-125 Results</option>
                                       <option value="{{route('monthly.tBreatherPridor.index')}}">Tube Breather Pridor Results</option>
                                       <option value="{{route('monthly.tBreatherDeluxe.index')}}">Tube Breather Deluxe Results</option>
                                       <option value="{{route('monthly.t4X440KOKA.index')}}">Tube 4 X 440 KOKA Results</option>
                                       <option value="{{route('monthly.tBreatherKOKA.index')}}">Tube Breather KOKA Results</option>
                                       <option value="{{route('monthly.tSuctionKOKA.index')}}">Tube Suction KOKA Results</option>
                                       <option value="{{route('monthly.CshnFrntFuelTnkDLX.index')}}">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="{{route('monthly.RbrMflrMntDLX.index')}}">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="{{route('monthly.GrmtSideCvrDLX.index')}}">Grommet Side Cover Deluxe Results</option>
                                       <option value="{{route('monthly.GrmtARearCvrCD100.index')}}">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="{{route('monthly.RbrHndlCshnCD100.index')}}">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="{{route('monthly.UndrRbrHndlCD100.index')}}">Under Rubber Handle CD-100 Results</option>
                                       <option value="{{route('monthly.PckngRbrCD100.index')}}">Packing Rubber CD-100 Results</option>
                                       <option value="{{route('monthly.GrmtCD70.index')}}">Grommet CD-70 Results</option>
                                       <option value="{{route('monthly.GrmtCG125.index')}}">Grommet CG-125 Results</option>
                                       <option value="{{route('monthly.tBtryBreatherDLX.index')}}">Tube Battery Breather Deluxe Results</option>
                                       <option value="{{route('monthly.tBtryBreatherCD70.index')}}">Tube Battery Breather CD-70 Results</option>
                                       <option value="{{route('monthly.tBtryBreatherCG125.index')}}">Tube Battery Breather CG-125 Results</option>
                                       <option value="{{route('monthly.tBtryBreatherCD100.index')}}">Tube Battery Breather CD-100 Results</option>
                                       <option value="{{route('monthly.tBtryBreatherKSW.index')}}">Tube Battery Breather KSW Results</option>
                                       <option value="{{route('monthly.tBtryBreatherKOKA.index')}}">Tube Battery Breather KOKA Results</option>
                                       <option value="{{route('monthly.tCompfuelKOKA.index')}}">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
						  <div class="ms-auto"><a href="/qa/inline/t4X440KOKA/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Inspection Record</a></div>

						</div>
            @if($tubes->count() > 0)
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th class="text-center">Sr#</th>
										<th class="text-center">Day</th>
										<th class="text-center">Month</th>
										<th class="text-center">Year</th>
										<th class="text-center">Extrusion(Single Layer)</th>
                                        <th class="text-center">Blanck Cutting</th>
                                        <th class="text-center">Vulcanization</th>
										<th class="text-center">Washing</th>
										<th class="text-center">Final Cutting</th>
										<th class="text-center">Clip Assembly</th>

										<th class="text-center">View Full Record</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
                                   @foreach ($tubes as $tube)
                                   <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">{{$tube->sr_no}}</h6>
                                            </div>
                                        </div>
                                    </td>
									<td class="text-center">{{$tube->day}}</td>
									<td class="text-center">{{$tube->month}}</td>
									<td class="text-center">{{$tube->year}}</td>
                                    <td class="text-center">{{$tube->extr_snl_lyr}}</td>
                                    <td class="text-center">{{$tube->blnk_ctng}}</td>
                                    <td class="text-center">{{$tube->vulcan}}</td>
                                    <td class="text-center">{{$tube->washing}}</td>
                                    <td class="text-center">{{$tube->fnl_ctng}}</td>
                                    <td class="text-center">{{$tube->clip_asmbl}}</td>
                                  {{--   <td class="text-center">{{$tube->inline_rejections}}</td>
                                    <td class="text-center">{{$tube->prod}}</td> --}}
									<td class="">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $tube->sr_no }}">
                                                View Full Record
                                            </button>
                                            <div class="modal" tabindex="-1" id="exampleModal{{ $tube->sr_no }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Tube 4 X 440 KOKA</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                          <b>Sr#</b> = {{$tube->sr_no}}
                                                        </p>
                                                        <p>
                                                          <b>Day</b> = {{$tube->day}}
                                                        </p>
                                                        <p>
                                                          <b>Month</b> = {{$tube->month}}
                                                        </p>
                                                        <p>
                                                          <b>Year</b> = {{$tube->year}}
                                                        </p>
                                                        <p>
                                                          <b>Extrusion(Single Layer)</b> = {{$tube->extr_snl_lyr}}
                                                        </p>

                                                        <p>
                                                          <b>Blanck Cutting</b> = {{$tube->blnk_ctng}}
                                                        </p>
                                                        <p>
                                                          <b>Vulcanization</b> = {{$tube->vulcan}}
                                                        </p>
                                                        <p>
                                                          <b>Washing</b> = {{$tube->washing}}
                                                        </p>
                                                        <p>
                                                          <b>Final Cutting(Top Layer)</b> = {{$tube->fnl_ctng}}
                                                        </p>


                                                        <p>
                                                          <b>Clip Assembly</b> = {{$tube->clip_asmbl}}
                                                        </p>
                                                        <p>
                                                          <b> Production</b> = {{$tube->prod}}
                                                        </p>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                    <td class="text-center">
                                        <div class="d-flex order-actions">
                                            <a href="/qa/inline/t4X440KOKA/{{$tube->sr_no}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/qa/inline/t4X440KOKA/{{$tube->sr_no}}">
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

              {!! $tubes->withQueryString()->links('pagination::bootstrap-5') !!}
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
