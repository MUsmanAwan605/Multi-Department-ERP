@extends('admin.admin_dashboard')
@section('admin')




<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Purchase</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Purchase Orders</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="{{ route('adminfinancesearch.order') }}">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By Serial Number or Title" >
                           </div>
                           <div class="ms-2">
                                 <button type="submit" class="btn btn-success">Search</button>
                           </div>
                           <div class="ms-2">
                                 <a href="/admin/finance/purchaseorders">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                 </a>
                           </div>
                       </div>
                        </form>
                        <div class="ms-auto"><a href="{{ route('finance.orders.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add  Order</a></div>
                </div>
                  {{-- <div class="ms-auto"><a href="/admin/products/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Order</a></div> --}}
                </div>
                @if ($records-> count() > 0)
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>id</th>
                                <th>Order number</th>
                                <th>Title</th>
                                <th>Order Quantity</th>
                                {{-- <th>Order Row</th> --}}
                                {{-- <th>Order Amount</th> --}}
                                <th>Department</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($records as $record)


                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">

                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">{{$record->id}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$record->ordrnum}}</td>
                                <td>{{$record->title}}</td>
                                {{-- <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>FulFilled</div></td> --}}
                                <td>{{$record->qty}}</td>
                                {{-- <td>{{$record->raw}}</td> --}}
                                {{-- <td>{{$record->amount}}</td> --}}
                                <td>{{$record->department}}</td>
                                @if ($record->status=='process')
                                <td><div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>Process</div></td>
                                @else
                                <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>confirmed</div></td>

                                @endif
                                <td>{{$record->date}}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('finance.orders.edit',['id'=>$record->id]) }}" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="POST" action="{{ route('finance.orders.destroy',['id'=>$record->id]) }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')" style="outline:none;border:none;background:transparent">
                                                <a href="{{ route('finance.orders.destroy',['id'=>$record->id]) }}" class="ms-3"><i class='bx bxs-trash'></i></a>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @else
        <div class="alert alert-danger">No record Found</div>
        @endif


    </div>
</div>
<!--end page wrapper -->

@endsection
