<?php $__env->startSection('admin'); ?>
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Store</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Stationary Order</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="<?php echo e(route('adminstoreorderrr.search')); ?>">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By  Name" >
                           </div>
                           <div class="ms-2">
                                 <button type="submit" class="btn btn-success">Search</button>
                           </div>
                           <div class="ms-2">
                                 <a href="/admin/stationaryorderrr">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                 </a>
                           </div>
                       </div>
                        </form>
                </div>
                <?php if($orders->count() > 0): ?>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Quantity</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="vertical-align: middle"><?php echo e(date('d M Y', strtotime($order->date))); ?></td>
                                <td><?php echo e($order->title); ?></td>
                                <td><?php echo e($order->qty); ?></td>
                                <td><?php echo e($order->dpt); ?></td>
                                <td><?php echo e($order->status); ?></td>
                                
                                 <td>
                                    <div class="d-flex order-actions">
                                        <a href="<?php echo e(route('adminstoreorder.edit',['id'=>$order->id])); ?>" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="POST" action="<?php echo e(route('adminstoreorder.destroy',['id'=>$order->id])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo e(method_field('DELETE')); ?>

                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')" style="outline:none;border:none;background:transparent">
                                                <a href="<?php echo e(route('adminstoreorder.destroy',['id'=>$order->id])); ?>" class="ms-3"><i class='bx bxs-trash'></i></a>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
                <div class="mt-5">
                    <?php echo $orders->withquerystring()->links('pagination::bootstrap-5'); ?>

                </div>
            </div>
            <?php else: ?>
            <div class="alert alert-danger">No record found</div>
            <?php endif; ?>
        </div>


    </div>
</div>
<!--end page wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/admin/stationaryorderrr/indexx.blade.php ENDPATH**/ ?>