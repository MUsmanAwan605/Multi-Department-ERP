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
                        <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <form method="POST" action="/hr/loan">
            @csrf
        <div class="card mt-8">
          <div class="card-body p-4">
              <h5 class="card-title">Add New </h5>
              <hr/>
               <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-8">
                    <div class="border border-3 p-4 rounded">
                     <div class="mb-3">
                         <label for="date" class="form-label">Date</label>
                         <input type="date"  class="form-control @error('Date') is-invalid @enderror" name="Date" id="inputProductTitle" placeholder="Enter Date">
                         {{-- <span class="text-danger text-uppercase ">{{ $errors->first('Date') }}</span> --}}
                       </div>
                       <div class="mb-3">
                        <label for="date" class="form-label">Sererial Number</label>
                        <input type=""  class="form-control @error('Date') is-invalid @enderror" name="Date" id="inputProductTitle" placeholder="Enter Date">
                        {{-- <span class="text-danger text-uppercase ">{{ $errors->first('Date') }}</span> --}}
                      </div>
                      <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="file"  class="form-control @error('Date') is-invalid @enderror" name="Date" id="inputProductTitle" placeholder="Enter Date">
                        {{-- <span class="text-danger text-uppercase ">{{ $errors->first('Date') }}</span> --}}
                      </div>

                     <div class="col-md-12 pt-3">
                         <div class="d-md-flex d-grid align-items-center gap-3">
                             <button type="submit" class="btn btn-primary px-4">Submit</button>
                         </div>

                     </div>


                     </div>
                    </div>

                </div>

          </div>
      </div>
    </form>

    </div>
</div>
<!--end page wrapper -->
@endsection
