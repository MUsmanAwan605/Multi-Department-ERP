@extends('hr.hr_dashboard')
@section('humanresource')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Hiring</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Recruitment</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
                <!-- Personal Datails of Employess-->
                <form method="POST" action="{{ route('hr.hiring.update', ['id' => $hiring->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card">
                            <div class="card-body p-4">
                                <h5 class="card-title">Edit Employee</h5>
                                <hr/>
                                 <div class="form-body mt-4">
                                  <div class="row">
                                     <div class="col-lg-6">
                                     <div class="border border-3 p-4 rounded">

                               <h5 class="mb-3 text-uppercase">Employees Details</h5>

									<div class="mb-3">
										<label for="fname" class="form-label ">Full Name</label>
										<input type="text"  class="form-control @error('FullName') is-invalid
                                        @enderror" name="FullName" id="FullName" value="{{ old('FullName', $hiring->fname) }}"  >
								<span class="text-danger text-uppercase ">{{ $errors->first('FullName') }}</span>

									</div>
									<div class="mb-3">
										<label for="bsValidation2" class="form-label ">Father/Husband Name</label>
										<input type="text"  class="form-control @error('Father/HusbandName') is-invalid
                                        @enderror" name="Father/HusbandName" id="bsValidation2"  value="{{ old('Father/HusbandName', $hiring->fh_name) }}"  >
								<span class="text-danger text-uppercase ">{{ $errors->first('Father/HusbandName') }}</span>

									</div>

									<div class="mb-3">
										<label for="bsValidation4" class="form-label ">Home Phone</label>
										<input type="tel" class="form-control @error('HomePhone')

                                        @enderror" name="HomePhone" id="bsValidation4" value="{{ old('username',$hiring->h_no) }}" >
										<span class="text-danger text-uppercase ">{{ $errors->first('HomePhone') }}</span>
									</div>
									<div class="mb-3">
										<label for="bsValidation5" class="form-label ">Mobile no</label>
										<input type="tel" value="{{ old('MobileNumber',$hiring->m_no) }}" class="form-control @error('MobileNumber') is-invalid

                                        @enderror" name="MobileNumber" id="bsValidation5" value=" {{ $hiring->m_no }} " >
										<span class="text-danger text-uppercase ">{{ $errors->first('MobileNumber',$hiring->m_no) }}</span>

									</div>
									<div class="mb-3">

									</div>
									<div class="mb-3">
										<label for="bsValidation8" class="form-label ">Date of Birth</label>
										<input type="date" value="{{ old('DateOfBirth',$hiring->dob) }}" class="form-control @error('DateOfBirth') is-invalid @enderror" name="DateOfBirth" id="bsValidation8" {{ $hiring->dob }} >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('DateOfBirth') }}</span>

									</div>
									<div class="mb-3">
										<label for="bsValidation9" class="form-label ">Email</label>
										<input type="email" value="{{ old('email',$hiring->email) }}" class="form-control @error('email') is-invalid @enderror" name="email" id="bsValidation8" placeholder="Email" >
										<span class="text-danger text-uppercase ">{{ $errors->first('email') }}</span>

                                    </div>

									<div class="mb-3">
										<label for="bsValidation10" class="form-label ">Region</label>
										<input type="text" value="{{ old('Region',$hiring->region) }}" class="form-control @error('Region') is-invalid @enderror" name="Region" id="bsValidation10" placeholder="Region" >
										<span class="text-danger text-uppercase ">{{ $errors->first('Region') }}</span>

									</div>
									<div class="mb-3">
										<label for="bsValidation11" class="form-label ">CNIC Number</label>
										<input type="tel" value="{{ old('CNICNumber',$hiring->cni_no) }}" class="form-control @error('CNICNumber') is-invalid @enderror" name="CNICNumber" id="bsValidation10" placeholder="CNIC Number" >
										<span class="text-danger text-uppercase ">{{ $errors->first('CNICNumber') }}</span>

                                    </div>

									<div class="mb-3">
										<label for="bsValidation13" class="form-label ">Address</label>
										<textarea class="form-control @error('Address') is-invalid @enderror"  name="Address"  id="bsValidation13" placeholder="Address ..." rows="3" >{{ old('Address', $hiring->adrs) }}</textarea>
                                        <span class="text-danger text-uppercase ">{{ $errors->first('Address') }}</span>

									</div>
                                    <div class="mb-3">
										<label for="MarriedStatus" class="form-label ">Married Status</label>
										<select class="form-select @error('MarriedStatus') is-invalid @enderror" name="MarriedStatus"  aria-label="Default select example">
                                            <option value="none"  >Select</option>
											<option value="Married " {{ old('MarriedStatus',$hiring->m_status)== 'Married' ? 'selected' : NULL }}>Married</option>
											<option value="Single" {{ old('MarriedStatus',$hiring->m_status)== 'Single' ? 'selected' : NULL }}0>Single</option>
										  </select>
										 {{-- <input type="text" value="{{ old('MarriedStatus') }}" class="form-control @error('MarriedStatus') is-invalid @enderror" name="MarriedStatus" id="bsValidation12" placeholder="Married Status" > --}}
                                         <span class="text-danger text-uppercase ">{{ $errors->first('MarriedStatus') }}</span>

									</div>
									<div class="mb-3">
										<label for="bsValidation12" class="form-label ">Emergency Contact Number</label>
										<input type="tel" value="{{ old('EmergencyContactNumber',$hiring->emergency_no) }}" class="form-control @error('EmergencyContactNumber') is-invalid @enderror" name="EmergencyContactNumber" id="bsValidation12" placeholder="Emergency Contact Number" >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('EmergencyContactNumber') }}</span>

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
										<input type="text" value="{{ old('School/CollegeName',$hiring->s_name) }}" class="form-control @error('School/CollegeName') is-invalid @enderror" name="School/CollegeName" id="bsValidation1"  placeholder="School/College Name"  >
										<span class="text-danger text-uppercase ">{{ $errors->first('School/CollegeName') }}</span>

									</div>
									<div class="mb-3">
										<label for="bsValidation2" class="form-label">Address</label>
										<input type="text" value="{{ old('EducationAddress',$hiring->l_adrs) }}"  class="form-control @error('EducationAddress') is-invalid @enderror" name="EducationAddress" id="bsValidation2" placeholder="Address"  >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('EducationAddress') }}</span>

									</div>

									<div class="mb-3">
										<label for="bsValidation4" class="form-label ">Grade</label>
										<input type="text" value="{{ old('Grade',$hiring->grade) }}" class="form-control @error('Grade') is-invalid @enderror" name="Grade" id="bsValidation4" placeholder="Grade" >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('Grade') }}</span>

									</div>
									<div class="mb-3">
										<label for="bsValidation5" class="form-label ">Passing Year</label>
										<input type="text" value=" {{ old('PassingYear',$hiring->p_year) }}" class="form-control @error('PassingYear') is-invalid @enderror" name="PassingYear" id="bsValidation5" placeholder="Passing Year" >
										<span class="text-danger text-uppercase ">{{ $errors->first('PassingYear') }}</span>

                                    </div>
								</div>
								<h5 class="mb-0 text-uppercase">Last Employment Information</h5>
									<div class="mb-3">
										<label for="bsValidation1" class="form-label ">Company Name</label>
										<input type="text" value="{{ old('CompanyName',$hiring->c_name) }}" class="form-control @error('CompanyName') is-invalid @enderror" name="CompanyName" id="bsValidation1"  placeholder="Company Name"  >
										<span class="text-danger text-uppercase ">{{ $errors->first('CompanyName') }}</span>

									</div>
									<div class="mb-3">
										<label for="bsValidation2" class="form-label ">Address</label>
										<input type="text" value="{{ old('LastEmploymentAddress',$hiring->adrsss) }}" class="form-control @error('LastEmploymentAddress') is-invalid @enderror" name="LastEmploymentAddress" id="bsValidation2" placeholder="LastEmploymentAddress"  >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('LastEmploymentAddress') }}</span>

									</div>

									<div class="mb-3">
										<label for="bsValidation4" class="form-label ">Designation</label>
										<input type="text"  value="{{ old('LastEmploymentDesignation',$hiring->designations) }}" class="form-control @error('LastEmploymentDesignation') is-invalid @enderror" name="LastEmploymentDesignation" id="bsValidation4" placeholder="LastEmploymentDesignation" >
                                        <span class="text-danger text-uppercase ">{{ $errors->first('LastEmploymentDesignation') }}</span>

									</div>
									<div class="mb-3">
										<label for="bsValidation5" class="form-label ">Year Of Employment</label>
										<input type="text" value="{{ old('LastYearOfEmployment',$hiring->yoemloy) }}" class="form-control @error('LastYearOfEmployment') is-invalid @enderror" name="LastYearOfEmployment" id="bsValidation5" placeholder="Year Of Employment" >
										<span class="text-danger text-uppercase ">{{ $errors->first('LastYearOfEmployment') }}</span>

                                    </div>






								</div>
                            </div>

















                <!-- End Education Datails-->
                 <!--  Attachment Details -->
                 <div class="col-md-6 mt-2">
                    <div class="border border-3 p-4 rounded">
                      <div class="row g-3">
                       <h5 class="mb-0 text-uppercase">Attach Copy Document </h5>
									<div class="mb-3">
										<label for="bsValidation1" class="form-label text-black">CV</label>
										<input type="file" class="form-control" name="cv" id="bsValidation1"  placeholder="School/College Name"  >
                                        {{-- <h6>filename:{{ $hiring->cv }}</h6> --}}
                                        {{-- @if ($hiring->cv == 'Image will be here') --}}
                                        {{-- <h4>Cv not Uploaded </h4> --}}
                                        {{-- @else --}}
                                        {{-- <img width="100" height="100" src="/uploads/cv/{{ $hiring->cv }}" alt=""> --}}
                                        {{-- @endif --}}
									</div>
									<div class="mb-3">
										<label for="bsValidation2" class="form-label text-black">2 CNIC Copy</label>
										<input type="file" class="form-control" name="cnic_copy" id="bsValidation2" placeholder="Address"  >
                                        {{-- <h6>filename:{{ $hiring->cnic_copy }}</h6> --}}
                                        {{-- <img width="100" height="100" src="/uploads/hiring_cnic_copy/{{ $hiring->cnic_copy }}" alt=""> --}}
                                    </div>
									<div class="mb-3">
										<label for="bsValidation4"   class="form-label ">Hiring Profile Image</label>
										<input type="file" class="form-control" name="photos" id="bsValidation4" placeholder="Grade" >
                                        {{-- <h6>filename:{{ $hiring->photos }}</h6> --}}
                                        {{-- <img width="100" height="100" src="/uploads/Hiring_Profile_img/{{ $hiring->photos }}" alt=""> --}}

                                    </div>
                                    <div class="mt-3">
                                        <div class="d-grid">
                                           <button type="submit" class="btn btn-primary">Submit </button>
                                        </div>
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
