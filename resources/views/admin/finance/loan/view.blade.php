@extends('admin.admin_dashboard')
@section('admin')
    <!--start page wrapper -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Loan</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">View Loan</li>
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

            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                        <form method="get" action="{{route('adminfinancesearch.loan')}}">
                            <div class="d-lg-flex">
                                <div class="col-8">
                                    <input type="search" name="search" class="form-control"
                                    placeholder="Search By Serial Number or Name">
                                </div>
                                <div class="ms-2">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </div>
                                <div class="ms-2">
                                    <a href="/admin/finance/loan">
                                        <button type="button" class="btn btn-danger">Reset</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                        {{-- <div class="ms-auto"><a href="/hr/record/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i
                                    class="bx bxs-plus-square"></i>Add New Loan</a></div> --}}
                    </div>
                    @if ($records->count() > 0)
                        <div class="table-responsive  ">
                            <table class="table table-bordered mb-0 ">
                                <thead class="table-light x">
                                    <tr>

                                        <th> Serial Number</th>
                                        <th> Name</th>
                                        <th> Department</th>
                                        <th>Loan Amount</th>

                                        <th>Remaining Balance</th>
                                        <th>Full View Record</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $record)
                                        <tr>

                                            <td style="vertical-align: middle">{{ $record->sno }}</td>
                                            <td style="vertical-align: middle">{{ $record->name }}</td>
                                            <td style="vertical-align: middle">{{ $record->department }}</td>
                                            <td style="vertical-align: middle">{{ $record->loan_amount }}</td>
                                            <td style="vertical-align: middle">{{ $record->remaining_balance }}</td>
                                            <td>
                                            <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $record->id }}">
                                    View Record</a>



                               <!-- Modal -->
<div class="modal fade" id="exampleModal{{ $record->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">loan Repayment Details</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                                            <!-- Model Window -->


                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-primary">Serial Number:</td>
                                                                    <td>{{ $record->sno }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">Name:</td>
                                                                    <td>{{ $record->name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">Department:</td>
                                                                    <td>{{ $record->department }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">record Amount:</td>
                                                                    <td>{{ $record->record_amount }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">Remaining Balance:</td>
                                                                    <td>{{ $record->remaining_balance }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-6">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="text-primary text-center" colspan="2">loan Repayment:</th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">January:</td>
                                                                    <td>@if ($record->January == '') 0 @else {{ $record->January }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">February:</td>
                                                                    <td>@if ($record->February == '') 0 @else {{ $record->February }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">March:</td>
                                                                    <td>@if ($record->March == '') 0 @else {{ $record->March }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">April:</td>
                                                                    <td>@if ($record->April == '') 0 @else {{ $record->April }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">May:</td>
                                                                    <td>@if ($record->May == '') 0 @else {{ $record->May }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">June:</td>
                                                                    <td>@if ($record->June == '') 0 @else {{ $record->June }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">July:</td>
                                                                    <td>@if ($record->July == '') 0 @else {{ $record->July }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">August:</td>
                                                                    <td>@if ($record->August == '') 0 @else {{ $record->August }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">September:</td>
                                                                    <td>@if ($record->September == '') 0 @else {{ $record->September }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">October:</td>
                                                                    <td>@if ($record->October == '') 0 @else {{ $record->October }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">November:</td>
                                                                    <td>@if ($record->November == '') 0 @else {{ $record->November }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">December:</td>
                                                                    <td>@if ($record->December == '') 0 @else {{ $record->December }} @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-info">Total Repayment Amount:</td>
                                                                    <td>@if ( $record->January + $record->February + $record->March + $record->April + $record->May + $record->June + $record->July + $record->August + $record->September + $record->October + $record->November + $record->December == '')
                                                                        0
                                                                        @else
                                                                        {{ $record->January + $record->February + $record->March + $record->April + $record->May + $record->June + $record->July + $record->August + $record->September + $record->October + $record->November + $record->December }}
                                                                    @endif </td>
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                            </div>



                                            </div>
                                        </div>
                                            </div>
                                        </td>
                                            <!-- Model Window -->

                                            <td style="vertical-align: middle">
                                                {{-- <div class="d-flex order-actions">
                                                    <a href="{{ route('hr.loan.edit',['id'=>$record->id]) }}"
                                                        class="btn btn-success">LR</a>
                                                    <form method="POST" action="{{ route('hr.loan.destroy',['id'=>$record->id]) }}">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit"
                                                            onclick="return confirm('Are you sure you want to delete?')"
                                                            style="outline:none;border:none;background:transparent">
                                                            <a href="{{ route('hr.loan.destroy',['id'=>$record->id]) }}"
                                                                class="ms-3"><i class='bx bxs-trash'></i></a>
                                                        </button>
                                                    </form>
                                                </div> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-5">
                            {!! $records->withquerystring()->links('pagination::bootstrap-5') !!}
                        </div>
                </div>
            @else
                <div class="alert alert-danger">No record found</div>
                @endif
            </div>


        </div>
    </div>
    <!--end page wrapper -->
    <style>
        /* Add a border between tables */
        .card+.card {
            border-top: 1px solid #000000;
            margin-top: 20px;
            /* Adjust as needed */
        }
    </style>

@endsection
