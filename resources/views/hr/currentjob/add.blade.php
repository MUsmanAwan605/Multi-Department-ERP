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
				<!--end breadcrumb-->
                <form method="POST" action="{{ route('hr.currentjob.store') }}" enctype="multipart/form-data" >
                    @csrf
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add  Employee</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-6">
                           <div class="border border-3 p-4 rounded">

                            <div class="mb-3">
                                <label for="Department" class="form-label">Employee Name</label>
                                <select class="form-select @error('EmployeeName') is-invalid
                                @enderror" name="EmployeeName" id="Department" aria-label="Default select example">
                                    <option value="none">Select Employee Name</option>
                                    @foreach ($hirings as $hiring )
                                    <option value="{{ $hiring->fname }}" {{ old('EmployeeName') == $hiring->fname ? 'selected': NULL  }}>{{ $hiring->fname }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger text-uppercase ">{{ $errors->first('EmployeeName') }}</span>
                              </div>

                              <div class="mb-3">
                                <label for="bsValidation4" class="form-label ">Supervisor Name</label>
                                <input type="text" value="{{ old('SupervisorName') }}" class="form-control @error('SupervisorName') is-invalid @enderror" name="SupervisorName" id="bsValidation4" placeholder="Supervisor Name" >
                                <span class="text-danger text-uppercase ">{{ $errors->first('SupervisorName') }}</span>
                            </div>

                            <div class="mb-3">
                                <label for="Department" class="form-label">Department</label>
                                <select class="form-select @error('Department') is-invalid
                                @enderror" name="Department" id="Department" aria-label="Default select example">
                                    <option value="none">Open this select Department</option>
                                    @foreach ($departments as $department )
                                    <option value="{{ $department->name }}" {{ old('Department') == $department->name ? 'selected': NULL  }}>{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger text-uppercase ">{{ $errors->first('Department') }}</span>
                              </div>

                           </div>
						   </div> <!-- /.COl End -->


						   <div class="col-md-6">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">

                                <div class="mb-3">
                                    <label for="bsValidation8" class="form-label ">Date OF Joining</label>
                                    <input type="date" value="{{ old('DateofJoining') }}" class="form-control @error('DateofJoining') is-invalid @enderror" name="DateofJoining" id="bsValidation8" placeholder="Date of Joining" >
                                    <span class="text-danger text-uppercase ">{{ $errors->first('DateofJoining') }}</span>

                                </div>

                                <div class="mb-3">
                                    <label for="bsValidation9" class="form-label ">Designation</label>
                                    <input type="text" value="{{ old('Designation') }}" class="form-control @error('Designation') is-invalid @enderror" name="Designation" id="bsValidation8" placeholder="Designation" >
                                    <span class="text-danger text-uppercase ">{{ $errors->first('Designation') }}</span>
                                </div>
								  </div>
                                  <div class="mt-3">
									  <div class="d-grid">
                                         <button type="submit" class="btn btn-primary">Submit </button>
									  </div>
								  </div>
							  </div>
						  </div>
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
                  </form>
			  </div>


			</div>
		</div>
@endsection
