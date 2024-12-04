@extends('admin.admin_dashboard')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Purchase Invoice</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Status</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--Message  Start-->
        @if (session('success'))
            <div class="alert alert-success" id="alertMessage">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('alertMessage').style.display = 'none';
                }, 3000);
            </script>
        @endif
        <!--Message  End-->

        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET" action="">
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
                        <a href="{{ route('admin.finance.purchase_invoice.add') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0">
                            <i class="bx bxs-plus-square"></i>Add Purchase Invoice
                        </a>
                    </div>
                </div>

                @if ($purchase_invoices->count() > 0)
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Sr#</th>
                                    <th>Purchase Invoice</th>
                                    <th>Date</th>
                                    <th>Department</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchase_invoices as $purchase_invoice)
                                    <tr>
                                        <td style="vertical-align: middle">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-0 font-14">{{ $purchase_invoice->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="vertical-align: middle">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#purchase_invoice{{ $purchase_invoice->id }}">
                                                {{ $purchase_invoice->purchase_invoice }}
                                            </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="purchase_invoice{{ $purchase_invoice->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title fs-5" id="exampleModalLabel">Purchase Invoice</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table mb-12 text-center table-bordered px-4">
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th>Sr#</th>
                                                                        <th>Purchase Invoice</th>
                                                                        <th>Date</th>
                                                                        <th>Department</th>
                                                                        <th>Description</th>
                                                                        <th>Quantity</th>
                                                                        <th>Unit Price</th>
                                                                        <th>Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="vertical-align: middle">{{ $purchase_invoice->id }}</td>
                                                                        <td style="vertical-align: middle">{{ $purchase_invoice->purchase_invoice }}</td>
                                                                        <td style="vertical-align: middle">{{ $purchase_invoice->date }}</td>
                                                                        <td style="vertical-align: middle">{{ $purchase_invoice->depart }}</td>
                                                                        <td style="vertical-align: middle">{{ $purchase_invoice->descp }}</td>
                                                                        <td style="vertical-align: middle">{{ $purchase_invoice->qty }}</td>
                                                                        <td style="vertical-align: middle">{{ $purchase_invoice->price }}</td>
                                                                        <td style="vertical-align: middle">{{ $purchase_invoice->total }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer" style="border: none">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="vertical-align: middle">{{ $purchase_invoice->date }}</td>
                                        <td style="vertical-align: middle">{{ $purchase_invoice->depart }}</td>
                                        <td style="vertical-align: middle">{{ $purchase_invoice->descp }}</td>
                                        <td style="vertical-align: middle">{{ $purchase_invoice->qty }}</td>
                                        <td style="vertical-align: middle">{{ $purchase_invoice->price }}</td>
                                        <td style="vertical-align: middle">{{ $purchase_invoice->total }}</td>
                                        <td style="vertical-align: middle">
                                            <div class="d-flex order-actions">
                                                <a href="{{ route('admin.finance.purchase_invoice.edit', $purchase_invoice->id) }}" class=""><i class='bx bxs-edit'></i></a>
                                                <form method="post" action="{{ url('admin/finance/purchase_invoice/' . $purchase_invoice->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="ms-2" style="padding: 6px 10px; outline:none; border:none; border-radius:5px;">
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
                @else
                    <div class="alert alert-danger">No records found</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
