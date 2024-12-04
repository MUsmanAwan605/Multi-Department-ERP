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
                        <!--Search Method Start -->
                        <form method="get" action="{{ route('admin.search.loan') }}">
                            <div class="d-lg-flex">
                                <div class="col-8">
                                    <input type="search" name="search" class="form-control"
                                        placeholder="Search By Serial Number or Name">
                                </div>
                                <div class="ms-2">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </div>
                                <div class="ms-2">
                                    <a href="/admin/humanresources/loan">
                                        <button type="button" class="btn btn-danger">Reset</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                        <!--Search Method End -->
                        <!--Add Button Start -->
                        {{-- <div class="ms-auto"><a href="{{ route('admin.humanresources.loan.create') }}"
                                class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add
                                Loan</a></div> --}}
                        <!--Add Button End -->
                    </div>
                    <!--No Record Found Condition -->
                    @if ($Loans->count() > 0)
                        <!--No Record Found Condition -->
                        <div class="table-responsive  ">
                            <table class="table table-bordered mb-0 ">
                                <thead class="table-light x">
                                    <tr>

                                        <th> Serial Number</th>
                                        <th> Name</th>
                                        <th> Department</th>
                                        <th>Loan Amount</th>
                                        <th>Last Paid Amount</th>
                                        <th>Remaining Balance</th>
                                        <th>Full View Record</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Foreach Loop Start-->
                                    @foreach ($Loans as $loan)
                                        <tr>
            <!--Display Data  Start-->
                                            <td style="vertical-align: middle">{{ $loan->sno }}</td>
                                            <td style="vertical-align: middle">{{ $loan->name }}</td>
                                            <td style="vertical-align: middle">{{ $loan->department }}</td>
                                            <td style="vertical-align: middle">{{ $loan->loan_amount }}</td>
                                            <!--Date Convert into  Month-->
                                            <td style="vertical-align: middle">
                                                {{ \Carbon\Carbon::parse($loan->date)->format('F') }}</td>
                                            <!--Date Convert into  Month-->

                                            <td style="vertical-align: middle">{{ $loan->remaining_balance }}</td>
                                            <!--Model Window Start-->
                                            <td>
                                                <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $loan->id }}">
                                                    View Record</a>

                                                <div class="modal fade" id="exampleModal{{ $loan->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                                <h5 class="modal-title text-white" id="exampleModalLabel">
                                                                    Loan Repayment Details</h5>
                                                                <button type="button" class="btn-close bg-white"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <!-- Model Window -->
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-primary">Serial Number:
                                                                                    </td>
                                                                                    <td>{{ $loan->sno }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Name:</td>
                                                                                    <td>{{ $loan->name }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Department:</td>
                                                                                    <td>{{ $loan->department }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Loan Amount:</td>
                                                                                    <td>{{ $loan->loan_amount }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Remaining Balance:
                                                                                    </td>
                                                                                    <td>{{ $loan->remaining_balance }}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th class="text-primary text-center"
                                                                                        colspan="2">Loan Repayment:</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">January:</td>
                                                                                    <td>
                                                                                        @if ($loan->January == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->January }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">February:</td>
                                                                                    <td>
                                                                                        @if ($loan->February == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->February }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">March:</td>
                                                                                    <td>
                                                                                        @if ($loan->March == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->March }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">April:</td>
                                                                                    <td>
                                                                                        @if ($loan->April == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->April }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">May:</td>
                                                                                    <td>
                                                                                        @if ($loan->May == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->May }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">June:</td>
                                                                                    <td>
                                                                                        @if ($loan->June == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->June }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">July:</td>
                                                                                    <td>
                                                                                        @if ($loan->July == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->July }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">August:</td>
                                                                                    <td>
                                                                                        @if ($loan->August == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->August }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">September:</td>
                                                                                    <td>
                                                                                        @if ($loan->September == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->September }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">October:</td>
                                                                                    <td>
                                                                                        @if ($loan->October == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->October }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">November:</td>
                                                                                    <td>
                                                                                        @if ($loan->November == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->November }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">December:</td>
                                                                                    <td>
                                                                                        @if ($loan->December == '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->December }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Total Repayment
                                                                                        Amount:</td>
                                                                                    <td>
                                                                                        @if (
                                                                                            $loan->January +
                                                                                                $loan->February +
                                                                                                $loan->March +
                                                                                                $loan->April +
                                                                                                $loan->May +
                                                                                                $loan->June +
                                                                                                $loan->July +
                                                                                                $loan->August +
                                                                                                $loan->September +
                                                                                                $loan->October +
                                                                                                $loan->November +
                                                                                                $loan->December ==
                                                                                                '')
                                                                                            0
                                                                                        @else
                                                                                            {{ $loan->January + $loan->February + $loan->March + $loan->April + $loan->May + $loan->June + $loan->July + $loan->August + $loan->September + $loan->October + $loan->November + $loan->December }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>


                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <!-- Model Window -->




                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--Model Window Start-->

                                            <td style="vertical-align: middle">
                                                <!--Edit Method  Start-->
                                                <div class="d-flex order-actions">
                                                    <a href="{{ route('admin.humanresources.loan.edit', ['id' => $loan->id]) }}"
                                                        class="btn btn-success">LR</a>
                                                    <!--Edit Method  End-->
                                                    <!--Delete Method  Start-->
                                                    <form method="POST"
                                                        action="{{ route('admin.humanresources.loan.destroy', ['id' => $loan->id]) }}">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit"
                                                            onclick="return confirm('Are you sure you want to delete?')"
                                                            style="outline:none;border:none;background:transparent">
                                                            <a href="{{ route('admin.humanresources.loan.destroy', ['id' => $loan->id]) }}"
                                                                class="ms-3"><i class='bx bxs-trash'></i></a>
                                                        </button>
                                                    </form>
                                                    <!--Delete Method  End-->
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!--End Foreach-->
                                </tbody>
                            </table>
                        </div>
                        <!--Pagination Start-->
                        <div class="mt-5">
                            {!! $Loans->withquerystring()->links('pagination::bootstrap-5') !!}
                        </div>
                        <!--Pagination End-->

                </div>
                <!--No Record Found Condition-->
            @else
                <div class="alert alert-danger">No record found</div>
                @endif
                <!--No Record Found Condition-->

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
