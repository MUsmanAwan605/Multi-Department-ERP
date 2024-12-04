@extends('hr.hr_dashboard')
@section('humanresource')
    <!--start page wrapper -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Salary</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">View Salary</li>
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
                        <form method="get" action="">
                            <div class="d-lg-flex">
                                <div class="col-8">
                                    <input type="search" name="search" class="form-control"
                                        placeholder="Search By  Name or Senerial Number">
                                </div>
                                <div class="ms-2">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </div>
                                <div class="ms-2">
                                    <a href="/hr/salary">
                                        <button type="button" class="btn btn-danger">Reset</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                        <div class="ms-auto"><a href="/hr/salary/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i
                                    class="bx bxs-plus-square"></i>Add Salary</a></div>
                    </div>
                    @if ($records->count() > 0)
                        <div class="table-responsive  ">
                            <table class="table table-bordered mb-0 ">
                                <thead class="table-light x">
                                    <tr>

                                        <th>ID </th>
                                        <th>Employee Name</th>
                                        <th>Department</th>
                                        <th>Net Pay Total Salary</th>
                                        <th>Status</th>
                                        <th>Employee Photos</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $record)
                                        <tr>

                                            <td style="vertical-align: middle">{{ $record->emp_id }}</td>
                                            <td style="vertical-align: middle">{{ $record->name }}</td>
                                            <td style="vertical-align: middle">{{ $record->department }}</td>
                                                <td style="vertical-align: middle">{{ $record->net_pay_total_salary }}</td>
                                                <td style="vertical-align: middle">{{ $salary->status }}</td>
                                                <td style="vertical-align: middle">
                                                    <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $record->id }}">
                                                    View Record</a>
                                                    <!-- Modal -->
<div class="modal fade" id="exampleModal{{ $record->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Salary Details</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-black">
                <div class="row">
                    <div class="col-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="text-primary" colspan="2">Employee Salary Details:</th>

                                </tr>
                                <tr>
                                    <td class="text-info">Date:</td>



                                    <td>{{ $record->date }}</td>
                                </tr>
                                <tr>

        <td class="text-info">Serial Number</td>
                                    <td>{{ $record->sno }}</td>
                                </tr>
                                <tr>

        <td class="text-info">Employee Name:</td>
                                    <td>{{ $record->emp_id }}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Mobile Number:</td>
                                    <td>{{ $record->name }}</td>
                                </tr>

                                <tr>
                                    <td class="text-info">Department</td>
                                    <td>{{ $record->department }}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Monthly Salary:</td>
                                    <td >{{ $record->m_salary}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">No Of Days:</td>
                                    <td >{{ $record->no_of_days}}</td>
                                </tr>


                                <tr>
                                    <td class="text-info">No of Late:</td>
                                    <td>{{ $record->no_of_late}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-info">Current Month Salary:</td>
                                    <td >{{ $record->c_m_record}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Over Time Hour</td>
                                    <td>{{ $record->o_t_hr}}</td>
                                </tr>

                                <tr>
                                    <td  class="text-info">
                                        Over Time Amount</td>
                                    <td>{{ $record->o_t_amt}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Allowance:</td>
                                    <td>{{ $record->allowance}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Total Salary Current Month Before Deduction:</td>
                                    <td>{{ $record->t_s_c_m_bef_deduction}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Monthly Loan Deduction:</td>
                                    <td>{{ $record->m_l_deduction}}</td>
                                </tr>

                                <tr>
                                    <td class="text-info">Advance Deduction Amount:</td>
                                    <td>{{ $record->advan_deduction_amount}}</td></tr>
                                <tr>
                                    <td class="text-info">Net Pay Total Salary:</td>
                                    <td>{{ $record->net_pay_total_salary
                                    }}</td>
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
<!-- Modal -->
                                                </td>




                                            <td style="vertical-align: middle">
                                                <div class="d-flex order-actions">
                                                    <a href="/hr/record/{{ $record->id }}/edit"
                                                        class="btn btn-success">Edit</a>
                                                    <form method="POST" action="/hr/record/{{ $record->id }}">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit"
                                                            onclick="return confirm('Are you sure you want to delete?')"
                                                            style="outline:none;border:none;background:transparent">
                                                            <a href="/hr/record/{{ $record->id }}/destroy"
                                                                class="ms-3"><i class='bx bxs-trash'></i></a>
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
