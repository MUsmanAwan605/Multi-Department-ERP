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
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Purchase Orders</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET" action="{{ route('financesearch.order') }}">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By Title">
                            </div>
                            <div class="ms-2">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                            <div class="ms-2">
                                <a href="/finance/purchaseorders">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="ms-auto">
                        <a href="{{ route('finance.orders.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0">
                            <i class="bx bxs-plus-square"></i>Add Order
                        </a>
                    </div>
                </div>

                @if ($purchaseorders->count() > 0)
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Company Name</th>
                                    <th>Requisition</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchaseorders as $purchaseorder)
                                    <tr>
                                        <td>{{ $purchaseorder->id }}</td>
                                        <td>{{ $purchaseorder->date }}</td>
                                        <td>{{ $purchaseorder->Company_Name }}</td>
                                        <td>{{ $purchaseorder->Requisition }}</td>
                                        <td>{{ $purchaseorder->Addres }}</td>
                                        <td>
                                            @if ($purchaseorder->status == 'process')
                                                <form action="{{ route('purchase-orders.confirm', $purchaseorder->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" onclick="return confirm('Are you sure you want to confirm this order?')" style="outline:none;border:none;background:transparent">
                                                        <i class='bx bxs-trash'></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                <div class="alert alert-danger">No records found</div>
                @endif
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function confirmOrder(orderId) {
        $.ajax({
            url: '/finance/orders/' + orderId + '/confirm',
            type: 'PUT',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log('Order confirmed successfully.');
                window.location.reload();
            },
            error: function(xhr, status, error) {
                console.error('Error confirming order:', error);
                alert('Error confirming order.');
            }
        });
    }
</script>

@endsection
