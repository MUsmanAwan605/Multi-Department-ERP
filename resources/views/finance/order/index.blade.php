@extends('finance.finance_dashboard')
@section('finance')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Finance</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Stationary Order</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="{{ route('finance.order.search') }}">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By  Name" >
                           </div>
                           <div class="ms-2">
                                 <button type="submit" class="btn btn-success">Search</button>
                           </div>
                           <div class="ms-2">
                                 <a href="/finance/order">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                 </a>
                           </div>
                       </div>
                        </form>
                </div>
                @if ($orders->count() > 0)
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Quantity</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td style="vertical-align: middle">{{ date('d M Y', strtotime($order->date)) }}</td>
                                <td>{{$order->title}}</td>
                                <td>{{$order->qty}}</td>
                                <td>{{$order->dpt}}</td>
                                <td style="vertical-align: middle; color: blue;">{{ $order->status }}</td>
                                {{-- @if ($order->status=='process')
                                <td><div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>Process</div></td>
                                @else
                                <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>confirmed</div></td>

                                @endif --}}
                                 <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('finance.order.edit',['id'=>$order->id]) }}" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="POST" action="{{ route('finance.order.destroy',['id'=>$order->id]) }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')" style="outline:none;border:none;background:transparent">
                                                <a href="{{ route('finance.order.destroy',['id'=>$order->id]) }}" class="ms-3"><i class='bx bxs-trash'></i></a>
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
                    {!! $orders->withquerystring()->links('pagination::bootstrap-5') !!}
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
