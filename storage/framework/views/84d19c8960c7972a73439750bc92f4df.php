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
                        <!--Search Method Start -->
                        <form method="get" action="<?php echo e(route('admin.search.loan')); ?>">
                            <div class="d-lg-flex">
                                <div class="col-8">
                                    <input type="search" name="search" class="form-control"
                                        placeholder="Search By Serial Number or Name">
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
                        <!--Search Method End -->
                        <!--Add Button Start -->
                        
                        <!--Add Button End -->
                    </div>
                    <!--No Record Found Condition -->
                    <?php if($Loans->count() > 0): ?>
                        <!--No Record Found Condition -->
                        <div class="table-responsive  ">
                            <table class="table table-bordered mb-0 ">
                                <thead class="table-light x">
                                    <tr>

                                        <th> Serial Number</th>
                                        <th> Name</th>
                                        <th> Department</th>
                                        <th>Loan Amount</th>
                                        <th>Last Paid Amount</th>
                                        <th>Remaining Balance</th>
                                        <th>Full View Record</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Foreach Loop Start-->
                                    <?php $__currentLoopData = $Loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
            <!--Display Data  Start-->
                                            <td style="vertical-align: middle"><?php echo e($loan->sno); ?></td>
                                            <td style="vertical-align: middle"><?php echo e($loan->name); ?></td>
                                            <td style="vertical-align: middle"><?php echo e($loan->department); ?></td>
                                            <td style="vertical-align: middle"><?php echo e($loan->loan_amount); ?></td>
                                            <!--Date Convert into  Month-->
                                            <td style="vertical-align: middle">
                                                <?php echo e(\Carbon\Carbon::parse($loan->date)->format('F')); ?></td>
                                            <!--Date Convert into  Month-->

                                            <td style="vertical-align: middle"><?php echo e($loan->remaining_balance); ?></td>
                                            <!--Model Window Start-->
                                            <td>
                                                <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal<?php echo e($loan->id); ?>">
                                                    View Record</a>

                                                <div class="modal fade" id="exampleModal<?php echo e($loan->id); ?>" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                                <h5 class="modal-title text-white" id="exampleModalLabel">
                                                                    Loan Repayment Details</h5>
                                                                <button type="button" class="btn-close bg-white"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <!-- Model Window -->
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-primary">Serial Number:
                                                                                    </td>
                                                                                    <td><?php echo e($loan->sno); ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Name:</td>
                                                                                    <td><?php echo e($loan->name); ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Department:</td>
                                                                                    <td><?php echo e($loan->department); ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Loan Amount:</td>
                                                                                    <td><?php echo e($loan->loan_amount); ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Remaining Balance:
                                                                                    </td>
                                                                                    <td><?php echo e($loan->remaining_balance); ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th class="text-primary text-center"
                                                                                        colspan="2">Loan Repayment:</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">January:</td>
                                                                                    <td>
                                                                                        <?php if($loan->January == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->January); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">February:</td>
                                                                                    <td>
                                                                                        <?php if($loan->February == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->February); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">March:</td>
                                                                                    <td>
                                                                                        <?php if($loan->March == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->March); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">April:</td>
                                                                                    <td>
                                                                                        <?php if($loan->April == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->April); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">May:</td>
                                                                                    <td>
                                                                                        <?php if($loan->May == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->May); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">June:</td>
                                                                                    <td>
                                                                                        <?php if($loan->June == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->June); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">July:</td>
                                                                                    <td>
                                                                                        <?php if($loan->July == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->July); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">August:</td>
                                                                                    <td>
                                                                                        <?php if($loan->August == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->August); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">September:</td>
                                                                                    <td>
                                                                                        <?php if($loan->September == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->September); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">October:</td>
                                                                                    <td>
                                                                                        <?php if($loan->October == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->October); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">November:</td>
                                                                                    <td>
                                                                                        <?php if($loan->November == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->November); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">December:</td>
                                                                                    <td>
                                                                                        <?php if($loan->December == ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->December); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-info">Total Repayment
                                                                                        Amount:</td>
                                                                                    <td>
                                                                                        <?php if(
                                                                                            $loan->January +
                                                                                                $loan->February +
                                                                                                $loan->March +
                                                                                                $loan->April +
                                                                                                $loan->May +
                                                                                                $loan->June +
                                                                                                $loan->July +
                                                                                                $loan->August +
                                                                                                $loan->September +
                                                                                                $loan->October +
                                                                                                $loan->November +
                                                                                                $loan->December ==
                                                                                                ''): ?>
                                                                                            0
                                                                                        <?php else: ?>
                                                                                            <?php echo e($loan->January + $loan->February + $loan->March + $loan->April + $loan->May + $loan->June + $loan->July + $loan->August + $loan->September + $loan->October + $loan->November + $loan->December); ?>

                                                                                        <?php endif; ?>
                                                                                    </td>
                                                                                </tr>


                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <!-- Model Window -->




                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--Model Window Start-->

                                            <td style="vertical-align: middle">
                                                <!--Edit Method  Start-->
                                                <div class="d-flex order-actions">
                                                    <a href="<?php echo e(route('admin.humanresources.loan.edit', ['id' => $loan->id])); ?>"
                                                        class="btn btn-success">LR</a>
                                                    <!--Edit Method  End-->
                                                    <!--Delete Method  Start-->
                                                    <form method="POST"
                                                        action="<?php echo e(route('admin.humanresources.loan.destroy', ['id' => $loan->id])); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo e(method_field('DELETE')); ?>

                                                        <button type="submit"
                                                            onclick="return confirm('Are you sure you want to delete?')"
                                                            style="outline:none;border:none;background:transparent">
                                                            <a href="<?php echo e(route('admin.humanresources.loan.destroy', ['id' => $loan->id])); ?>"
                                                                class="ms-3"><i class='bx bxs-trash'></i></a>
                                                        </button>
                                                    </form>
                                                    <!--Delete Method  End-->
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!--End Foreach-->
                                </tbody>
                            </table>
                        </div>
                        <!--Pagination Start-->
                        <div class="mt-5">
                            <?php echo $Loans->withquerystring()->links('pagination::bootstrap-5'); ?>

                        </div>
                        <!--Pagination End-->

                </div>
                <!--No Record Found Condition-->
            <?php else: ?>
                <div class="alert alert-danger">No record found</div>
                <?php endif; ?>
                <!--No Record Found Condition-->

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

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/admin/humanresources/loan/index.blade.php ENDPATH**/ ?>