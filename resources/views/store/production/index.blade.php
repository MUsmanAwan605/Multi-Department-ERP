@extends('admin.layout.master');
@section('main-content')
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
                        <li class="breadcrumb-item active" aria-current="page">Production</li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="ms-auto">
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
            </div> -->
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="{{ route('subpurchase.search') }}">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By Id or Name" >
                           </div>
                           <div class="ms-2">
                               <button type="submit" class="btn btn-success">Search</button>
                            </div>
                           <div class="ms-2">
                                 <a href="/hr/currentjob">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                 </a>
                                </div>
                       </div>
                    </form>
                    <div class="ms-auto"><a href="/admin/subsupplier/production/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Production</a></div>
                </div>
                @if($production->count()>0)
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Production Item</th>
                                <th>Vendor</th>
                                <th>Stock</th>
                                <th>Issued</th>
                                <th>Balance</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productions as $product)
                            @foreach ($productions as $production)
                            <tr>
                                <td style="vertical-align: middle">{{$product->production}}</td>
                                <td style="vertical-align: middle">{{$product->vendor}}</td>
                                <td style="vertical-align: middle">{{$product->stock}}</td>
                                <td style="vertical-align: middle">{{$product->issue}}</td>
                                <td style="vertical-align: middle">{{$product->balance}}</td>
                                <td style="vertical-align: middle">
                                    <div class="d-flex order-actions">
                                        <a href="/admin/subsupplier/production/{{$production->id}}/edit" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="post" action="/admin/subsupplier/production/{{$production->id}}">
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-5">
                    {!! $productions->withQueryString()->links('pagination::bootstrap-5') !!}
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
