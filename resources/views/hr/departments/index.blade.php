@extends('hr.hr_dashboard')
@section('humanresource')
<!--start page wrapper -->
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">HR</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View Department</li>
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
           setTimeout(function(){
               document.getElementById('alertMessage').style.display = 'none';
           }, 3000);
       </script>
   @endif
<!--Message  End-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="position-relative">
                        <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"><span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                    </div>
                  <div class="ms-auto"><a href="{{ route('hr.departments.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add  Department</a></div>
                </div>
                @if($departments->count() > 0)
                                <!--end breadcrumb-->
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="hiringTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Department Name</th>
                                                        <th>Department Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($departments as $department)
                                                    <tr>
                                                        <td>{{ $department->name }}</td>
                                                        <td>{{ $department->description }}</td>
                                                        <td>
                                                            <div class="d-flex order-actions">
                                                                <a href="/hr/departments/{{ $department->id }}/edit"><i class='bx bxs-edit'></i></a>
                                                                <form method="POST" action="/hr/departments/{{ $department->id }}">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete?')" style="outline:none;border:none;background:transparent">
                                                                        <a href="{{ route('hr.departments.destroy',['id'=>$department->id]) }}" class="ms-3"><i class='bx bxs-trash'></i></a>
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
                                            {!! $departments->withquerystring()->links('pagination::bootstrap-5') !!}
                                        </div>
                                    </div>
                                    @else
                                    <div class="alert alert-danger">NO Record Found</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--end page wrapper -->



                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
<style>
    /* Add a border between tables */
    .card + .card {
        border-top: 1px solid #000000;
        margin-top: 20px; /* Adjust as needed */
    }
</style>

@endsection
