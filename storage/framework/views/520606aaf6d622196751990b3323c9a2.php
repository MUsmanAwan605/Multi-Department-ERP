<?php $__env->startSection('admin'); ?>
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
            <form method="POST" action="<?php echo e(route('admin.humanresources.employee.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
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
                                    <input type="text" value="<?php echo e(old('FullName')); ?>" class="form-control <?php $__errorArgs = ['FullName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="FullName" id="FullName"  placeholder="First Name"  >
                            <span class="text-danger text-uppercase "><?php echo e($errors->first('FullName')); ?></span>

                        </div>

                        <div class="mb-3">
                            <label for="bsValidation2" class="form-label ">Father/Husband Name</label>
                            <input type="text" value="<?php echo e(old('Father/HusbandName')); ?>" class="form-control <?php $__errorArgs = ['Father/HusbandName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Father/HusbandName" id="bsValidation2" placeholder="Father/Husband"  >
                            <span class="text-danger text-uppercase "><?php echo e($errors->first('Father/HusbandName')); ?></span>

                        </div>

                        <div class="mb-3">
                            <label for="bsValidation4" class="form-label ">Home Phone</label>
                            <input type="tel" value="<?php echo e(old('HomePhone')); ?>" class="form-control <?php $__errorArgs = ['HomePhone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="HomePhone" id="bsValidation4" placeholder="Home Phone" >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('HomePhone')); ?></span>
                                    <small class="text-muted ">e.g "03000000123"</small>
                                </div>


                                <div class="mb-3">
                                    <label for="bsValidation5" class="form-label">Mobile no</label>
                                    <input type="tel" value="<?php echo e(old('MobileNumber')); ?>" class="form-control <?php $__errorArgs = ['MobileNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="MobileNumber" id="bsValidation5" placeholder="Mobile Number" data-inputmask="'mask': '0399-9999-999'">
                                    <span class="text-danger text-uppercase"><?php echo e($errors->first('MobileNumber')); ?></span>
                                    <small class="text-muted ">e.g "03000000123"</small>
                                </div>

                                <div class="mb-3">
                                    <label for="bsValidation8" class="form-label ">Date of Birth</label>
                                    <input type="date" value="<?php echo e(old('DateOfBirth')); ?>" class="form-control <?php $__errorArgs = ['DateOfBirth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="DateOfBirth" id="bsValidation8" placeholder="Date of Birth" >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('DateOfBirth')); ?></span>

                                </div>

                                <div class="mb-3">
                                    <label for="bsValidation9" class="form-label ">Email</label>
                                    <input type="text" value="<?php echo e(old('email')); ?>" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" id="bsValidation8"  data-inputmask="'alias': 'email'"  />
                                 <span class="text-danger text-uppercase "><?php echo e($errors->first('email')); ?></span>
                                <small class="text-muted">e.g "support@adminkit.io"</small>
                                 </div>
                                <div class="mb-3">
                                    <label for="bsValidation10" class="form-label ">Region</label>
                                    <input type="text" value="<?php echo e(old('Region')); ?>" class="form-control <?php $__errorArgs = ['Region'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Region" id="bsValidation10" placeholder="Region" >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('Region')); ?></span>
                                    <small class="text-muted ">e.g "Karachi"</small>
                                </div>


                                <div class="mb-3">
                                    <label for="cnic" class="form-label ">CNIC Number</label>
                                    <input type="tel" id="cnic" value="<?php echo e(old('CNICNumber')); ?>" class="form-control <?php $__errorArgs = ['CNICNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="CNICNumber"  placeholder="CNIC Number" >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('CNICNumber')); ?></span>
                                    <small class="text-muted ">e.g "0000-0000000-0"</small>
                                </div>

                                <div class="mb-3">
                                    <label for="Address" class="form-label ">Address</label>
                                    <input class="form-control <?php $__errorArgs = ['Address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  name="Address"  id="Address" placeholder="Address ..." rows="4" cols="50" value=" <?php echo e(old('Address')); ?>" >
                                     <span class="text-danger text-uppercase "><?php echo e($errors->first('Address')); ?></span>
                                     <small class="text-muted ">e.g "Mr. Nasratullah Khan
                                        House No 17-B
                                        Street No 30
                                        Sector F-7/1
                                        ISLAMABAD-44000
                                        PAKISTAN"</small>
                                    </div>


                                    <div class="mb-3">
                                        <label for="MarriedStatus" class="form-label">Married Status</label>
                                        <select class="form-select <?php $__errorArgs = ['MarriedStatus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="MarriedStatus" aria-label="Default select example">
                                            <option value="none">Select</option>
                                            <option value="Married" <?php echo e(old('MarriedStatus') == 'Married' ? 'selected' : ''); ?>>Married</option>
                                            <option value="Single" <?php echo e(old('MarriedStatus') == 'Single' ? 'selected' : ''); ?>>Single</option>
                                        </select>
                                        <span class="text-danger text-uppercase"><?php echo e($errors->first('MarriedStatus')); ?></span>
                                    </div>
                                <div class="mb-3">
                                    <label for="bsValidation12" class="form-label ">Emergency Contact Number</label>
                                    <input type="tel" value="<?php echo e(old('EmergencyContactNumber')); ?>" class="form-control <?php $__errorArgs = ['EmergencyContactNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="EmergencyContactNumber" id="bsValidation12" placeholder="Emergency Contact Number" >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('EmergencyContactNumber')); ?></span>
                                    <small class="text-muted ">e.g "0300-0000-123"</small>
                                </div>
                       </div>

                    <div class="border border-3 p-4 rounded mt-3">
                           <h5 class="mb-0 text-uppercase">Attach Copy Document </h5>

                                <div class="mb-3">
                                    <label for="bsValidation1" class="form-label text-black">CV</label>
                                    <input type="file" value="<?php echo e(old('cv')); ?>" class="form-control <?php $__errorArgs = ['cv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cv" id="bsValidation1">
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('cv')); ?></span>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="bsValidation2" class="form-label text-black">CNIC Copy</label>
                                    <input type="file" value="<?php echo e(old('cnic_copy')); ?>" class="form-control <?php $__errorArgs = ['cnic_copy'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cnic_copy" id="bsValidation2" placeholder="Address"  >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('cnic_copy')); ?></span>

                                </div>
                                <div class="mb-3">
                                    <label for="bsValidation4" class="form-label ">Employee Profile Image</label>
                                    <input type="file" value="<?php echo e(old('photos')); ?>" class="form-control <?php $__errorArgs = ['photos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="photos" id="bsValidation4">
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('photos')); ?></span>

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
                                    <input type="text" value="<?php echo e(old('School/CollegeName')); ?>" class="form-control <?php $__errorArgs = ['School/CollegeName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="School/CollegeName" id="bsValidation1"  placeholder="School/College Name"  >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('School/CollegeName')); ?></span>

                            </div>

                            <div class="mb-3">
                                <label for="bsValidation2" class="form-label">Education Address</label>
                                <input type="text" value="<?php echo e(old('EducationAddress')); ?>"  class="form-control <?php $__errorArgs = ['EducationAddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="EducationAddress" id="bsValidation2" placeholder="Education Address"  >
                                <span class="text-danger text-uppercase "><?php echo e($errors->first('EducationAddress')); ?></span>
                        </div>

                            <div class="mb-3">
                                <label for="bsValidation4" class="form-label ">Grade</label>
                                <input type="text" value="<?php echo e(old('Grade')); ?>" class="form-control <?php $__errorArgs = ['Grade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Grade" id="bsValidation4" placeholder="Grade" >
                                <span class="text-danger text-uppercase "><?php echo e($errors->first('Grade')); ?></span>
                                <small class="text-muted ">e.g "ABC"</small>
                            </div>
                             <div class="mb-3">
                                <label for="bsValidation5" class="form-label ">Passing Year</label>
                                <input type="text" value=" <?php echo e(old('PassingYear')); ?>" class="form-control <?php $__errorArgs = ['PassingYear'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="PassingYear" id="bsValidation5" placeholder="Passing Year" >
                                <span class="text-danger text-uppercase "><?php echo e($errors->first('PassingYear')); ?></span>
                                <small class="text-muted ">e.g "2024"</small>

                            </div>
                            <h5 class="mb-0 text-uppercase">Last Employment Information</h5>

                            <div class="mb-3">
                            <label for="bsValidation1" class="form-label ">Company Name</label>
                                    <input type="text" value="<?php echo e(old('CompanyName')); ?>" class="form-control <?php $__errorArgs = ['CompanyName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="CompanyName" id="bsValidation1"  placeholder="Company Name"  >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('CompanyName')); ?></span>
                                </div>

                                <div class="mb-3">
                                    <label for="bsValidation2" class="form-label ">Address</label>
                                    <input type="text" value="<?php echo e(old('LastEmploymentAddress')); ?>" class="form-control <?php $__errorArgs = ['LastEmploymentAddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="LastEmploymentAddress" id="bsValidation2" placeholder="Last Employment Address"  >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('LastEmploymentAddress')); ?></span>
                                    <small class="text-muted ">e.g "
                                        Company Name ___
                                        Street No __
                                        Sector ___
                                        ISLAMABAD-44000
                                        PAKISTAN"</small>

                                </div>
                                <div class="mb-3">
                                    <label for="bsValidation4" class="form-label "> Last Employement Designation</label>
                                    <input type="text"  value="<?php echo e(old('LastEmploymentDesignation')); ?>" class="form-control <?php $__errorArgs = ['LastEmploymentDesignation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="LastEmploymentDesignation" id="bsValidation4" placeholder="Last Employment Designation" >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('LastEmploymentDesignation')); ?></span>
                                    <small class="text-muted ">e.g "HR Manager"</small>

                                </div>
                                <div class="mb-3">
                                    <label for="bsValidation5" class="form-label ">Year Of Employment</label>
                                    <input type="text" value="<?php echo e(old('LastYearOfEmployment')); ?>" class="form-control <?php $__errorArgs = ['LastYearOfEmployment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="LastYearOfEmployment" id="bsValidation5" placeholder="Year Of Employment" >
                                    <span class="text-danger text-uppercase "><?php echo e($errors->first('LastYearOfEmployment')); ?></span>
                                    <small class="text-muted ">e.g "2024"</small>
                                </div>
                                
                                    <div class="border border-3 p-4 rounded">
                                      
                                       <h5 class="mb-0 text-uppercase">Current Employeee </h5>
                                       <div class="mb-3">
                                        <label for="Department" class="form-label">Employee Name</label>
                                        <input type="text" value="<?php echo e(old('EmployeeName')); ?>" class="form-control <?php $__errorArgs = ['EmployeeName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="EmployeeName" id="bsValidation4" placeholder="Employee Name" >

                                        
                                        
                                        <span class="text-danger text-uppercase "><?php echo e($errors->first('EmployeeName')); ?></span>
                                      </div>


                                      <div class="mb-3">
                                        <label for="bsValidation4" class="form-label ">Supervisor Name</label>
                                        <input type="text" value="<?php echo e(old('SupervisorName')); ?>" class="form-control <?php $__errorArgs = ['SupervisorName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="SupervisorName" id="bsValidation4" placeholder="Supervisor Name" >
                                        <span class="text-danger text-uppercase "><?php echo e($errors->first('SupervisorName')); ?></span>
                                    </div>


                                    <div class="mb-3">
                                        <label for="Department" class="form-label">Department</label>
                                        <select class="form-select <?php $__errorArgs = ['Department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Department" id="Department" aria-label="Default select example">
                                            <option value="none">Open this select Department</option>
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($department->name); ?>" <?php echo e(old('Department') == $department->name ? 'selected': NULL); ?>><?php echo e($department->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <span class="text-danger text-uppercase "><?php echo e($errors->first('Department')); ?></span>
                                      </div>



                                      <div class="mb-3">
                                        <label for="bsValidation8" class="form-label ">Date OF Joining</label>
                                        <input type="date" value="<?php echo e(old('DateofJoining')); ?>" class="form-control <?php $__errorArgs = ['DateofJoining'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="DateofJoining" id="bsValidation8" placeholder="Date of Joining" >
                                        <span class="text-danger text-uppercase "><?php echo e($errors->first('DateofJoining')); ?></span>
                                    </div>

                                    <div class="mb-3">
                                        <label for="bsValidation9" class="form-label ">Designation</label>
                                        <input type="text" value="<?php echo e(old('Designation')); ?>" class="form-control <?php $__errorArgs = ['Designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Designation" id="bsValidation8" placeholder="Designation" >
                                        <span class="text-danger text-uppercase "><?php echo e($errors->first('Designation')); ?></span>
                                    </div>
                                    
                                    </div>
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/admin/humanresources/Employee/add.blade.php ENDPATH**/ ?>