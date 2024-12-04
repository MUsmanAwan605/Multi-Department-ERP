@extends('hr.hr_dashboard')
@section('humanresource')
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
                        <li class="breadcrumb-item active" aria-current="page">View Employee</li>
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
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="{{ route('search.current') }}">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By Id or Name" >
                           </div>
                           <div class="ms-2">
                                 <button type="submit" class="btn btn-success">Search</button>
                           </div>
                           <div class="ms-2">
                                 <a href="/hr/currentjob">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                 </a>
                           </div>
                       </div>
                        </form>
                  <div class="ms-auto"><a href="{{ route('hr.currentjob.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Employee</a></div>
                </div>
                @if($currentJobs->count()>0)
                <div class="table-responsive">
                    <table class="table mb-0" id="hiringTable">
                        <thead class="table-light">
                            <tr>
                                <th>Employee ID </th>
                                <th>Employee Name</th>
                                <th>Supervisor Name</th>
                                <th>Department</th>
                                <th>Employee Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currentJobs as $currentJob)
                            <tr>

                                {{-- <td>{{ $currentJob->id }}</td> --}}
                                <td style="vertical-align: middle">{{ $currentJob->e_id }}</td>
                                <td style="vertical-align: middle">{{ $currentJob->e_name }}</td>
                                <td style="vertical-align: middle">{{ $currentJob->supervisor_name }}</td>
                               <td style="vertical-align: middle">{{ $currentJob->department }}</td>
                               @foreach ($hirings as $hiring)
                               @if ($hiring->fname == $currentJob->e_name)
                                   <td>
                                       @if ($hiring->photos != 'Image will be here')
                                           <img width="70" height="70" src="/uploads/Hiring_Profile_img/{{ $hiring->photos }}" alt="">
                                       @else
                                           <img width="70" height="70" src="/uploads/dummyimg/dummyimg.jpg" alt="Dummy Image">
                                       @endif
                                   </td>
                               @endif
                           @endforeach



                                <td style="vertical-align: middle">
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('hr.currentjob.edit',['id'=>$currentJob->id]) }}"><i class='bx bxs-edit'></i></a>
                                        <form method="POST" action="{{ route('hr.currentjob.destroy',['id'=>$currentJob->id]) }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')" style="outline:none;border:none;background:transparent">
                                                <a href="{{ route('hr.currentjob.destroy',['id'=>$currentJob->id]) }}" class="ms-3"><i class='bx bxs-trash'></i></a>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </div>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-5">
                    {!! $currentJobs->withQueryString()->links('pagination::bootstrap-5') !!}
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
