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
                            <li class="breadcrumb-item active" aria-current="page">View Loan</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <!--Store Method -->
            <form method="POST" action="<?php echo e(route('admin.humanresources.loan.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title">Add Loan</h5>
                        <hr />
                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="border border-3 p-4 rounded">
                                    <td><h4>Add Loan for: <span class=" text-success"> <?php echo e($employee->fname); ?></span></h4></td>
                                 <div class="mb-3">
                                     <label for="date" class="form-label">Date</label>
                                     <input type="date" value="<?php echo e(old('Date')); ?>"  class="form-control <?php $__errorArgs = ['Date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Date" id="inputProductTitle" placeholder="Enter Date">
                                     <span class="text-danger text-uppercase "><?php echo e($errors->first('Date')); ?></span>
                                   </div>
                                   <div class="mb-3">
                                     <label for="So#" class="form-label">Senerial Number</label>
                                     <input type="number" value="<?php echo e(old('Sno')); ?>"  class="form-control <?php $__errorArgs = ['Sno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Sno" id="inputProductTitle" placeholder="Enter Senerial Number">
                                     <span class="text-danger text-uppercase "><?php echo e($errors->first('Sno')); ?></span>
                                   </div>

                                   <div class="mb-3">
                                     <label for="EmployeeName" class="form-label">Employee Name</label>
                                     <input type="text" value="<?php echo e(old('Name', $employee->fname)); ?>" class="form-control <?php $__errorArgs = ['Name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Name" id="Name" readonly>
                                     
                                 </div>


                                   <div class="mt-3">
                                     <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                     </div>
                                 </div>

                                </div>
                                </div> <!-- /.COl End -->

                                <!-- COl Start-->
                                <div class="col-md-6">
                                 <div class="border border-3 p-4 rounded">
                                   <div class="row g-3">

                                     <div class="mb-1">
                                         <label for="Department" class="form-label">Department</label>
                                         <input type="text"
                                                value="<?php echo e(old('Department', $employee->department)); ?>"
                                                class="form-control <?php $__errorArgs = ['Department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="Department"
                                                id="inputDepartment" readonly
                                                >
                                         
                                     </div>

                                        <div class="mb-1">
                                          <label for="LoanAmount" class="form-label">Loan Amount</label>
                                          <input type="number" value="<?php echo e(old('LoanAmount')); ?>"  class="form-control <?php $__errorArgs = ['LoanAmount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="LoanAmount" id="inputProductTitle" placeholder="Enter Loan Amount">
                                          <span class="text-danger text-uppercase "><?php echo e($errors->first('LoanAmount')); ?></span>
                                        </div>
                                          <div class="mb-5">
                                              <label for="LoanAmount" class="form-label">Loan repayment</label>
                                              <input type="text" class="form-control" name="loanpayment" id="inputProductTitle" placeholder="Enter Repayment Amount" disabled>
                                          </div>

                                       </div>

                                   </div>
                               </div>
                               </div>
                            </div><!--end row-->
                        </div> <!--end row-->
                    </div>
                </div>
            </form> <!--Form End -->
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/admin/humanresources/loan/add.blade.php ENDPATH**/ ?>