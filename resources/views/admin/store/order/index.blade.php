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
                            <li class="breadcrumb-item active" aria-current="page">Inventory</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card-body">
                @if(session('success'))
                <div id="success-message" class="alert alert-success">
                    {{ session('success') }}
                </div>

                <script>
                    setTimeout(function() {
                        document.getElementById('success-message').style.display = 'none';
                    }, 5000); // Hide after 5 seconds
                </script>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                        <form method="GET"  action="{{ route('admininventory.search') }}">
                            <div class="d-lg-flex">
                                <div class="col-8">
                                    <input type="search" name="search" class="form-control" placeholder="Search By S.no or Name" >
                               </div>
                               <div class="ms-2">
                                     <button type="submit" class="btn btn-success">Search</button>
                               </div>
                               <div class="ms-2">
                                     <a href="/admin/store/inventory">
                                        <button type="button" class="btn btn-danger">Reset</button>
                                     </a>
                               </div>
                           </div>
                            </form>

                        <div class="ms-auto"><a href="{{ route('admininventory.create') }}"
                            class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add
                            Inventory</a></div>
                        </div>
                        @if ($orders->count() > 0)
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Order NUmber </th>
                                        <th>Date</th>
                                        <th>Row</th>
                                        <th>Quantity </th>
                                        <th>Department Name</th>
                                        {{-- <th>Quantity-in</th> --}}

                                        <th>Actions</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td style="vertical-align: middle">{{ $order->ordrnum }}</td>
                                            <td style="vertical-align: middle">{{ date('d M Y', strtotime($order->date)) }}</td>
                                            <td style="vertical-align: middle">{{ $order->raw }}</td>
                                            <td style="vertical-align: middle">{{ $order->qty }}</td>
                                            <td style="vertical-align: middle">{{ $order->dpt }}</td>
                                            {{-- <td style="vertical-align: middle">{{ $order->qty_in }}</td>
                                            <td style="vertical-align: middle">{{ $order->qty_out }}</td>
                                            <td style="vertical-align: middle">{{ $order->balance }}</td>
                                            <td style="vertical-align: middle">{{ $order->d_c }}</td>
                                            <td style="vertical-align: middle">{{ $order->weight_in }}</td>
                                            <td style="vertical-align: middle">{{ $order->packets_in }}</td>
                                            <td style="vertical-align: middle">{{ $order->no_cartons }}</td> --}}
                                            <td style="vertical-align: middle">
                                                <div class="d-flex order-actions">
                                                    <a href="{{ route('adminorder.edit', $order->id) }}"
                                                        class=""><i class='bx bxs-edit'></i></a>

                                                    <form method="post"
                                                        action="{{ route('adminorder.destroy', $order->id) }}">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="ms-2"
                                                            style="padding: 9px 10px;outline:none;border:none;border-radius:5px;">
                                                            <i class='bx bxs-trash'></i>
                                                        </button>
                                                    </form>
                                                </div>
                        </div>
                        </td>
                        </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <div class="mt-5">
            {!! $orders->withQueryString()->links('pagination::bootstrap-5') !!}
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
