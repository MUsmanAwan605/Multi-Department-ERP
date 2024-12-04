<?php $__env->startSection('admin'); ?>
    <!--start page wrapper -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Loan</div>
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
            <!--Message  Start-->
            <?php if(session('success')): ?>
                <div class="alert alert-success" id="alertMessage">
                    <?php echo e(session('success')); ?>

                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('alertMessage').style.display = 'none';
                    }, 3000);
                </script>
            <?php endif; ?>
            <!--Message  End-->
            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center mb-4 gap-3">
            <!--Search Mehtod Start-->
                        <form method="get" action="<?php echo e(route('admin.search.loan')); ?>">
                            <div class="d-lg-flex">
                                <div class="col-8">
                                    <input type="search" name="search" class="form-control"
                                        placeholder="Search By CNIC">
                                </div>
                                <div class="ms-2">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </div>
                                <div class="ms-2">
                                    <a href="/admin/humanresources/loan">
                                        <button type="button" class="btn btn-danger">Reset</button>
                                    </a>
                                </div>
                            </div>
                        </form>
            <!--Search Mehtod End-->

            <!--Add Button Start-->

            <!--Add Button Close-->
                    </div>
            <!--No Record Found Condition -->

            <?php if($records->count() > 0): ?>
            <div class="table-responsive">
                <table class="table mb-0" id="hiringTable">
                    <thead class="table-light">
                        <tr>

                            <th>Employee Name</th>
                            <th>Mobile Number</th>
                            <th>CNIC Number</th>
                            <th>Employee Photos</th>
                            <th>Loan</th>
                            <th>View Full Record</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                <td style="vertical-align: middle"><?php echo e($record->fname); ?></td>
                                <td style="vertical-align: middle"><?php echo e($record->m_no); ?></td>
                                <td style="vertical-align: middle"><?php echo e($record->cni_no); ?></td>
                                <?php if($record->photos == 'Image will be here'): ?>
                                    <td style="vertical-align: middle"><img width="70" height="70"
                                            src="/uploads/dummyimg/dummyimg.jpg" alt=""></td>
                                <?php else: ?>
                                    <td style="vertical-align: middle"><img width="70" height="70"
                                            src="/uploads/Employee_Profile_img/<?php echo e($record->photos); ?>"
                                            alt=""></td>
                                <?php endif; ?>
                                <td style="vertical-align: middle"><a class="btn btn-primary"
                                        href="<?php echo e(route('admin.humanresources.loan.create',['id'=>$record->id])); ?>">Add Loan</a>
                                </td>


                                <!-- Cv Uploaded  Close-->
                                <!-- Modal Window Start -->

                                <td style="vertical-align: middle">

                                    <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal<?php echo e($record->id); ?>"> View Record</a>

                                    <div class="modal fade" id="exampleModal<?php echo e($record->id); ?>" tabindex="-1"
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
                                                                        <td><?php echo e($record->fname); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Father and Husband
                                                                            Name:</td>
                                                                        <td><?php echo e($record->fh_name); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Home Number:</td>
                                                                        <td><?php echo e($record->h_no); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Mobile Number:
                                                                        </td>
                                                                        <td><?php echo e($record->m_no); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Date Of Birth:
                                                                        </td>
                                                                        <td><?php echo e($record->dob); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Email:</td>
                                                                        <td><?php echo e($record->email); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">CNIC Number:</td>
                                                                        <td><?php echo e($record->cni_no); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Address:</td>
                                                                        <td><?php echo e($record->adrs); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Married Status:
                                                                        </td>
                                                                        <td><?php echo e($record->m_status); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Emergency Number:
                                                                        </td>
                                                                        <td><?php echo e($record->emergency_no); ?></td>
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
                                                                        <td><?php echo e($record->s_name); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Education
                                                                            Address:</td>
                                                                        <td><?php echo e($record->l_adrs); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Grade:</td>
                                                                        <td><?php echo e($record->grade); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Passing Year:
                                                                        </td>
                                                                        <td><?php echo e($record->p_year); ?></td>hiring
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
                                                                        <td><?php echo e($record->c_name); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Company Address:
                                                                        </td>
                                                                        <td><?php echo e($record->adrsss); ?></td>hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Company
                                                                            Designation:</td>
                                                                        <td><?php echo e($record->designations); ?></td>
                                                                        hiring
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-info">Year of
                                                                            Employment:</td>
                                                                        <td><?php echo e($record->yoemloy); ?></td>hiring
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
                                    <!-- Modal Window Start -->



                                    
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-5">
                <?php echo $records->withquerystring()->links('pagination::bootstrap-5'); ?>

            </div>
    </div>
<?php else: ?>
    <div class="alert alert-danger">No Record Found</div>
    <?php endif; ?>
                                            <!-- No Record Found Condition  -->

            </div>


        </div>
    </div>
    <!--end page wrapper -->
    <style>
        /* Add a border between tables */
        .card+.card {
            border-top: 1px solid #000000;
            margin-top: 20px;
            /* Adjust as needed */
        }
    </style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/admin/humanresources/loan/view.blade.php ENDPATH**/ ?>