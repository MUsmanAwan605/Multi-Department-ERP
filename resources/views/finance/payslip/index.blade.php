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
                        <li class="breadcrumb-item active" aria-current="page">Payslips</li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto">
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
            </div> --}}
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By Title" >
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
                <div class="ms-auto"><a href="/finance/payslip/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add payslip</a></div>
                </div>
                @if($payslips->count()>0)
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sr#</th>
                                <th>Employee Name</th>
                                <th>Employee ID</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Date</th>
                                <th>Basic Salary</th>
                                <th>Allowances</th>
                                <th>Gross Salary</th>
                                <th>Deductions</th>
                                <th>Net Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payslips as $payslip)

                            <tr>
                                <td style="vertical-align: middle">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">{{$payslip->id}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td style="vertical-align: middle">
                                    <a href="" data-bs-toggle="modal"  data-bs-target="#payslip{{$payslip->id}}">{{$payslip->e_name}}</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="payslip{{$payslip->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title fs-5" id="exampleModalLabel">Payslips</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="mb-12" class="modal-body">
                                                <table class="table mb-12 text-center table-bordered px-4">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Sr#</th>
                                                            <th>Employee Name</th>
                                                            <th>Employee ID</th>
                                                            <th>Department</th>
                                                            <th>Designation</th>
                                                            <th>Date</th>
                                                            <th>Basic Salary</th>
                                                            <th>Allowances</th>
                                                            <th>Gross Salary</th>
                                                            <th>Deductions</th>
                                                            <th>Net Salary</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->id}}</p> </td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->e_name}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->e_id}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->depart}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->desig}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->date}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->b_salary}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->allowances}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->g_salary}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->deduct}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payslip->n_salary}}</p></td>
                                                            {{-- <td style="vertical-align: middle">
                                                                @if($payslip->fin_img == 'Image will be here')
                                                                Image will be here
                                                                @else
                                                                <img src="/uploads/{{$payslip->fin_img}}" width="70" height="70" alt="">
                                                                @endif
                                                            </td> --}}
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer" style="border: none">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save payslip</button> --}}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="vertical-align: middle">{{$payslip->e_id}}</td>
                                <td style="vertical-align: middle">{{$payslip->depart}}</td>
                                <td style="vertical-align: middle">{{$payslip->desig}}</td>
                                <td style="vertical-align: middle">{{$payslip->date}}</td>
                                <td style="vertical-align: middle">{{$payslip->b_salary}}</td>
                                <td style="vertical-align: middle">{{$payslip->allowances}}</td>
                                <td style="vertical-align: middle">{{$payslip->g_salary}}</td>
                                <td style="vertical-align: middle">{{$payslip->deduct}}</td>
                                <td style="vertical-align: middle">{{$payslip->n_salary}}</td>
                                {{-- <td style="vertical-align: middle">
                                    @if($payslip->fin_img == 'Image will be here')
                                    Image will be here
                                    @else
                                    <img src="../uploads/{{$payslip->fin_img}}" width="70" height="70" alt="">
                                    @endif
                                </td>                                   --}}
                                <td style="vertical-align: middle">
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('finance.payslip.edit',$payslip->id)}}" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="post" action="{{ url('/finance/payslip/' . $payslip->id) }}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')"
                                            class="ms-2" style="padding: 6px 10px;outline:none;border:none;border-radius:5px;" >
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
            </div>
        </div>
        @else
        <div class="alert alert-danger">No records found</div>
        @endif
    </div>
</div>
@endsection
