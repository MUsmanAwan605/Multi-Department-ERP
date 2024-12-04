@extends('admin.admin_dashboard')
@section('admin')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">SubSupplier</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Subsupplier</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="{{ route('adminsubsupplier.search') }}">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By Name or Company " >
                           </div>
                           <div class="ms-2">
                                 <button type="submit" class="btn btn-success">Search</button>
                           </div>
                           <div class="ms-2">
                                 <a href="/admin/store/subsupplier">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                 </a>
                           </div>
                       </div>
                        </form>
                  <div class="ms-auto"><a href="{{route('adminsubsupplier.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>New Subsupplier</a></div>
                </div>
                @if($records->count()>0)
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                 <th>
                                    <div>
										<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
									</div>
                                </th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>address</th>
                                <th>Company Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                            <tr>
                                <td>
                                    <div>
										<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
									</div>
                                </td>
                                <td style="vertical-align: middle">{{$record->spname}}</td>
                                <td style="vertical-align: middle">{{$record->contact}}</td>
                                <td style="vertical-align: middle">{{$record->email}}</td>
                                <td style="vertical-align: middle">{{$record->address}}</td>
                                <td style="vertical-align: middle">{{$record->cname}}</td>
                                <td style="vertical-align: middle">
                                    <div class="d-flex order-actions">
                                        <a href="{{route('adminsubsupplier.edit' ,$record->id)}}" class=""><i class='bx bxs-edit'></i></a>

                                        <form method="post" action="{{route('adminsubsupplier.destroy',$record->id)}}">
												@csrf
												{{method_field('DELETE')}}
													<button type="submit" class="ms-2" style="padding: 9px 10px;outline:none;border:none;border-radius:5px;">
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
                <div class="mt-5">
                    {!! $records->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        @else
            <div class="alert alert-danger">No record found</div>
            @endif
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
@endsection
