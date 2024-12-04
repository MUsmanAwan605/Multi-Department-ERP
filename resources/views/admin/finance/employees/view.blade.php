@extends('admin.admin_dashboard')
@section('admin')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Employees</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">View Employees</li>
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
                        <form method="GET" action="{{ route('adminfinancesearch.employees') }}">
                            <div class="d-lg-flex">
                                <div class="col-8">
                                    <input type="search" name="search" class="form-control" placeholder="Search By  Name">
                                </div>
                                <div class="ms-2">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </div>
                                <div class="ms-2">
                                    <a href="/admin/finance/employees">
                                        <button type="button" class="btn btn-danger">Reset</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                        {{-- <div class="ms-auto"><a href="/hr/hiring/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i
                                    class="bx bxs-plus-square"></i>Add Employee</a></div> --}}
                    </div>
                    @if ($records->count() > 0)
                        <div class="table-responsive">
                            <table class="table mb-0" id="hiringTable">
                                <thead class="table-light">
                                    <tr>

                                        <th>Employee Name</th>
                                        <th>Mobile Number</th>
                                        <th>CNIC Number</th>
                                        <th>Employee Photos</th>
                                        <th>CV</th>
                                        <th>View Full Record</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $record)
                                        <tr>

                                            <td style="vertical-align: middle">{{ $record->fname }}</td>
                                            <td style="vertical-align: middle">{{ $record->m_no }}</td>
                                            <td style="vertical-align: middle">{{ $record->cni_no }}</td>
                                            @if ($record->photos == 'Image will be here')
                                                <td style="vertical-align: middle"><img width="70" height="70"
                                                        src="/uploads/dummyimg/dummyimg.jpg" alt=""></td>
                                            @else
                                                <td style="vertical-align: middle"><img width="70" height="70"
                                                        src="/uploads/Hiring_Profile_img/{{ $record->photos }}"
                                                        alt=""></td>
                                            @endif
                                            <!-- Cv Uploaded  Satrt-->
                                            @if ($record->cv == 'Image will be here')
                                                <td style="vertical-align: middle">
                                                    <button type="type" class="btn btn-danger">
                                                        Cv Not Upload
                                                    </button>
                                                </td>
                                            @else
                                                <td style="vertical-align: middle">
                                                    <a href="{{ asset('uploads/cv/' . $record->cv) }}"
                                                        class="btn btn-primary" target="_blank">
                                                        View CV
                                                    </a>
                                                </td>
                                            @endif
                                            <!-- Cv Uploaded  Close-->
                                            <!-- Modal Window Start -->

                                            <td style="vertical-align: middle">

                                                <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $record->id }}">hiring View Record</a>

                                                <div class="modal fade" id="exampleModal{{ $record->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog  modal-dialog-centered modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                                <h5 class="modal-title text-white" id="exampleModalLabel">
                                                                    Hiring</h5>
                                                                <button type="button" class="btn-close bg-white"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body text-black">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th class="text-primary text-center"
                                                                                        colspan="2">Employee Details</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Employee Name:
                                                                                    </td>
                                                                                    <td>{{ $record->fname }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Father and Husband
                                                                                        Name:</td>
                                                                                    <td>{{ $record->fh_name }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Home Number:</td>
                                                                                    <td>{{ $record->h_no }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Mobile Number:
                                                                                    </td>
                                                                                    <td>{{ $record->m_no }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Date Of Birth:
                                                                                    </td>
                                                                                    <td>{{ $record->dob }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Email:</td>
                                                                                    <td>{{ $record->email }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">CNIC Number:</td>
                                                                                    <td>{{ $record->cni_no }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Address:</td>
                                                                                    <td>{{ $record->adrs }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Married Status:
                                                                                    </td>
                                                                                    <td>{{ $record->m_status }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Emergency Number:
                                                                                    </td>
                                                                                    <td>{{ $record->emergency_no }}</td>
                                                                                    hiring
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>

                                                                                    <th class="text-primary text-center"
                                                                                        colspan="2">Employee Education
                                                                                        Detail</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">School Name:</td>
                                                                                    <td>{{ $record->s_name }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Education
                                                                                        Address:</td>
                                                                                    <td>{{ $record->l_adrs }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Grade:</td>
                                                                                    <td>{{ $record->grade }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Passing Year:
                                                                                    </td>
                                                                                    <td>{{ $record->p_year }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="text-info text-center"
                                                                                        colspan="2">Employee Last Job
                                                                                        Detail</th>
                                                                                    <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Company Name:
                                                                                    </td>
                                                                                    <td>{{ $record->c_name }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Company Address:
                                                                                    </td>
                                                                                    <td>{{ $record->adrsss }}</td>hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Company
                                                                                        Designation:</td>
                                                                                    <td>{{ $record->designations }}</td>
                                                                                    hiring
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Year of
                                                                                        Employment:</td>
                                                                                    <td>{{ $record->yoemloy }}</td>hiring
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <table class="table">
                                                                            <tbody>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <table class="table">
                                                                            <tbody>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal Window End -->



                                            <td style="vertical-align: middle">
                                                {{-- <div class="d-flex order-actions">
                                                    <a href="{{ route('hr.hiring.edit', ['id' => $record->id]) }}"><i
                                                            class='bx bxs-edit'></i></a>

                                                    <form method="POST"
                                                        action="{{ route('hr.hiring.destroy', ['id' => $record->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            onclick="return confirm('Are you sure you want to delete?')"
                                                            style="outline:none;border:none;background:transparent">
                                                            <a href="{{ route('hr.hiring.destroy', ['id' => $record->id]) }}"
                                                                class="ms-3"><i class='bx bxs-trash'></i></a>
                                                        </button>
                                                    </form>
                                                </div> --}}
                                            </td>
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
                <div class="alert alert-danger">No Record Found</div>
                @endif
            </div>
        </div>
    </div>
    <!--end page wrapper -->
@endsection
