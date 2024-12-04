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
								<li class="breadcrumb-item active" aria-current="page">View Hiring</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
                <form method="POST" action="{{ route('hr.employee.store') }}" enctype="multipart/form-data">
                    @csrf
                        <!-- Form fields -->
                        <div class="card">
                            <div class="card-body p-4">
					  <h5 class="card-title"> Employee</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
                            <div class="col-lg-6">
                               <div class="border border-3 p-4 rounded">
                               <h5 class="mb-3 text-uppercase"> Details</h5>
                            <div class="mb-3">
                                <label for="fname" class="form-label ">Full Name</label>
										<input type="text" value="{{ old('FullName') }}" class="form-control @error('FullName') is-invalid
                                        @enderror" name="FullName" id="FullName"  placeholder="First Name"  >
								<span class="text-danger text-uppercase ">{{ $errors->first('FullName') }}</span>

                            </div>

                            <div class="mb-3">
                                <label for="bsValidation2" class="form-label ">Father/Husband Name</label>
                                <input type="text" value="{{ old('Father/HusbandName') }}" class="form-control @error('Father/HusbandName') is-invalid
                                @enderror" name="Father/HusbandName" id="bsValidation2" placeholder="Father/Husband"  >
								<span class="text-danger text-uppercase ">{{ $errors->first('Father/HusbandName') }}</span>

                            </div>

                            <div class="mb-3">
                                <label for="bsValidation4" class="form-label ">Home Phone</label>
                                <input type="tel" value="{{ old('HomePhone') }}" class="form-control @error('HomePhone') is-invalid @enderror" name="HomePhone" id="bsValidation4" placeholder="Home Phone" >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('HomePhone') }}</span>
                                        <small class="text-muted ">e.g "03000000123"</small>
                                    </div>


                                    <div class="mb-3">
                                        <label for="bsValidation5" class="form-label">Mobile no</label>
                                        <input type="tel" value="{{ old('MobileNumber') }}" class="form-control @error('MobileNumber') is-invalid @enderror" name="MobileNumber" id="bsValidation5" placeholder="Mobile Number" data-inputmask="'mask': '0399-9999-999'">
                                        <span class="text-danger text-uppercase">{{ $errors->first('MobileNumber') }}</span>
                                        <small class="text-muted ">e.g "03000000123"</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="bsValidation8" class="form-label ">Date of Birth</label>
										<input type="date" value="{{ old('DateOfBirth') }}" class="form-control @error('DateOfBirth') is-invalid @enderror" name="DateOfBirth" id="bsValidation8" placeholder="Date of Birth" >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('DateOfBirth') }}</span>

                                    </div>

                                    <div class="mb-3">
                                        <label for="bsValidation9" class="form-label ">Email</label>
                                        <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" id="bsValidation8"  data-inputmask="'alias': 'email'"  />
                                     <span class="text-danger text-uppercase ">{{ $errors->first('email') }}</span>
                                    <small class="text-muted">e.g "support@adminkit.io"</small>
                                     </div>
                                    <div class="mb-3">
                                        <label for="bsValidation10" class="form-label ">Region</label>
										<input type="text" value="{{ old('Region') }}" class="form-control @error('Region') is-invalid @enderror" name="Region" id="bsValidation10" placeholder="Region" >
										<span class="text-danger text-uppercase ">{{ $errors->first('Region') }}</span>
                                        <small class="text-muted ">e.g "Karachi"</small>
									</div>


                                    <div class="mb-3">
                                        <label for="cnic" class="form-label ">CNIC Number</label>
										<input type="tel" id="cnic" value="{{ old('CNICNumber') }}" class="form-control @error('CNICNumber') is-invalid @enderror" name="CNICNumber"  placeholder="CNIC Number" >
										<span class="text-danger text-uppercase ">{{ $errors->first('CNICNumber') }}</span>
                                        <small class="text-muted ">e.g "0000-0000000-0"</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Address" class="form-label ">Address</label>
                                        <input class="form-control @error('Address') is-invalid @enderror"  name="Address"  id="Address" placeholder="Address ..." rows="4" cols="50" value=" {{ old('Address') }}" >
                                         <span class="text-danger text-uppercase ">{{ $errors->first('Address') }}</span>
                                         <small class="text-muted ">e.g "Mr. Nasratullah Khan
                                            House No 17-B
                                            Street No 30
                                            Sector F-7/1
                                            ISLAMABAD-44000
                                            PAKISTAN"</small>
                                        </div>


                                    <div class="mb-3">
                                        <label for="MarriedStatus" class="form-label ">Married Status</label>
										<select class="form-select @error('MarriedStatus') is-invalid @enderror" name="MarriedStatus"  aria-label="Default select example">
                                            <option value="none"  >Select</option>
											<option value="Married" {{ old('MarriedStatus')== 'Married' ? 'selected' : NULL }}>Married</option>
											<option value="Single" {{ old('MarriedStatus')== 'Single' ? 'selected' : NULL }}0>Single</option>
										  </select>
                                         <span class="text-danger text-uppercase ">{{ $errors->first('MarriedStatus') }}</span>

                                    </div>

                                    <div class="mb-3">
                                        <label for="bsValidation12" class="form-label ">Emergency Contact Number</label>
										<input type="tel" value="{{ old('EmergencyContactNumber') }}" class="form-control @error('EmergencyContactNumber') is-invalid @enderror" name="EmergencyContactNumber" id="bsValidation12" placeholder="Emergency Contact Number" >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('EmergencyContactNumber') }}</span>
                                        <small class="text-muted ">e.g "0300-0000-123"</small>
                                    </div>
                           </div>

                        <div class="border border-3 p-4 rounded mt-3">
                               <h5 class="mb-0 text-uppercase">Attach Copy Document </h5>

                                    <div class="mb-3">
                                        <label for="bsValidation1" class="form-label text-black">CV</label>
										<input type="file" value="{{ old('cv') }}" class="form-control" name="cv" id="bsValidation1">
										<span class="text-danger text-uppercase ">{{ $errors->first('cv') }}</span>

                                    </div>
                                    <div class="mb-3">
                                        <label for="bsValidation2" class="form-label text-black">CNIC Copy</label>
										<input type="file" value="{{ old('cnic_copy') }}" class="form-control" name="cnic_copy" id="bsValidation2" placeholder="Address"  >
										<span class="text-danger text-uppercase ">{{ $errors->first('cnic_copy') }}</span>

                                    </div>
                                    <div class="mb-3">
                                        <label for="bsValidation4" class="form-label ">Hiring Profile Image</label>
										<input type="file" value="{{ old('photos') }}" class="form-control" name="photos" id="bsValidation4">
										<span class="text-danger text-uppercase ">{{ $errors->first('photos') }}</span>

                                    </div>
                                    <div class="mt-3">
                                        <div class="d-grid">
                                           <button type="submit" class="btn btn-primary">Submit </button>
                                        </div>
                                    </div>
                            </div>

                            </div> <!-- /.COl End -->

                <!-- End Personal Information -->




                    <!--  Education Datails-->
						   <div class="col-md-6">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
                                    <h5 class="mb-0 text-uppercase">Education Information</h5>
                                <div class="mb-3">
                                    <label for="bsValidation1" class="form-label ">School/College Name</label>
										<input type="text" value="{{ old('School/CollegeName') }}" class="form-control @error('School/CollegeName') is-invalid @enderror" name="School/CollegeName" id="bsValidation1"  placeholder="School/College Name"  >
										<span class="text-danger text-uppercase ">{{ $errors->first('School/CollegeName') }}</span>

                                </div>

                                <div class="mb-3">
                                    <label for="bsValidation2" class="form-label">Education Address</label>
                                    <input type="text" value="{{ old('EducationAddress') }}"  class="form-control @error('EducationAddress') is-invalid @enderror" name="EducationAddress" id="bsValidation2" placeholder="Education Address"  >
                                    <span class="text-danger text-uppercase ">{{ $errors->first('EducationAddress') }}</span>
                            </div>

                                <div class="mb-3">
                                    <label for="bsValidation4" class="form-label ">Grade</label>
                                    <input type="text" value="{{ old('Grade') }}" class="form-control @error('Grade') is-invalid @enderror" name="Grade" id="bsValidation4" placeholder="Grade" >
                                    <span class="text-danger text-uppercase ">{{ $errors->first('Grade') }}</span>
                                    <small class="text-muted ">e.g "ABC"</small>
                                </div>
                                 <div class="mb-3">
                                    <label for="bsValidation5" class="form-label ">Passing Year</label>
                                    <input type="text" value=" {{ old('PassingYear') }}" class="form-control @error('PassingYear') is-invalid @enderror" name="PassingYear" id="bsValidation5" placeholder="Passing Year" >
                                    <span class="text-danger text-uppercase ">{{ $errors->first('PassingYear') }}</span>
                                    <small class="text-muted ">e.g "2024"</small>

                                </div>
								<h5 class="mb-0 text-uppercase">Last Employment Information</h5>

                                <div class="mb-3">
                                <label for="bsValidation1" class="form-label ">Company Name</label>
										<input type="text" value="{{ old('CompanyName') }}" class="form-control @error('CompanyName') is-invalid @enderror" name="CompanyName" id="bsValidation1"  placeholder="Company Name"  >
										<span class="text-danger text-uppercase ">{{ $errors->first('CompanyName') }}</span>
									</div>

                                    <div class="mb-3">
                                        <label for="bsValidation2" class="form-label ">Address</label>
										<input type="text" value="{{ old('LastEmploymentAddress') }}" class="form-control @error('LastEmploymentAddress') is-invalid @enderror" name="LastEmploymentAddress" id="bsValidation2" placeholder="Last Employment Address"  >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('LastEmploymentAddress') }}</span>
                                        <small class="text-muted ">e.g "
                                            Company Name ___
                                            Street No __
                                            Sector ___
                                            ISLAMABAD-44000
                                            PAKISTAN"</small>

									</div>
                                    <div class="mb-3">
                                        <label for="bsValidation4" class="form-label "> Last Employement Designation</label>
										<input type="text"  value="{{ old('LastEmploymentDesignation') }}" class="form-control @error('LastEmploymentDesignation') is-invalid @enderror" name="LastEmploymentDesignation" id="bsValidation4" placeholder="Last Employment Designation" >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('LastEmploymentDesignation') }}</span>
                                        <small class="text-muted ">e.g "HR Manager"</small>

									</div>
                                    <div class="mb-3">
                                        <label for="bsValidation5" class="form-label ">Year Of Employment</label>
										<input type="text" value="{{ old('LastYearOfEmployment') }}" class="form-control @error('LastYearOfEmployment') is-invalid @enderror" name="LastYearOfEmployment" id="bsValidation5" placeholder="Year Of Employment" >
										<span class="text-danger text-uppercase ">{{ $errors->first('LastYearOfEmployment') }}</span>
                                        <small class="text-muted ">e.g "2024"</small>
                                    </div>
                                    {{-- <div class="col-lg-6 "> --}}
                                        <div class="border border-3 p-4 rounded">
                                          {{-- <div class="row g-3"> --}}
                                           <h5 class="mb-0 text-uppercase">Current Employeee </h5>
                                           <div class="mb-3">
                                            <label for="Department" class="form-label">Employee Name</label>
                                            <input type="text" value="{{ old('EmployeeName') }}" class="form-control @error('EmployeeName') is-invalid @enderror" name="EmployeeName" id="bsValidation4" placeholder="Employee Name" >

                                            {{-- <select class="form-select @error('EmployeeName') is-invalid
                                            @enderror" name="EmployeeName" id="Department" aria-label="Default select example">
                                                <option value="none">Open this select Employee Name</option>
                                                {{-- @foreach ($hirings as $hiring )
                                                <option value="{{ $hiring->fname }}" {{ old('EmployeeName') == $hiring->fname ? 'selected': NULL  }}>{{ $hiring->fname }}</option>
                                                @endforeach --}}
                                            {{-- </select>  --}}
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
                                        {{-- </div> --}}
                                        </div>
                                      </div>

                                </div>
                            </div>
                        </div>






                          {{-- <div class="row"> --}}


                          {{-- Attchment --}}

                          </div>
                          {{-- Attchment --}}




						  </div>
					   </div><!--end row-->
					</div>
                </div>
                  </form>
			  </div>


			</div>
		</div>
@endsection

