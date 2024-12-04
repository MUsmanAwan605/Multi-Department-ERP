<?php $__env->startSection('admin'); ?>
<!--start page wrapper -->
<!--start page wrapper -->
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
                        <li class="breadcrumb-item active" aria-current="page">Raw Material Products</li>
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
           setTimeout(function(){
               document.getElementById('alertMessage').style.display = 'none';
           }, 3000);
       </script>
   <?php endif; ?>
<!--Message  End-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="<?php echo e(route('adminrawbrandprod.search')); ?>">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By Product" >
                            </div>
                            <div class="ms-2">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                            <div class="ms-2">
                                <a href="/admin/store/rawbrandproduct">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                </a>
                            </div>
                        </div>
                    </form>

                  <div class="ms-auto"><a href="<?php echo e(route('adminrawbrandprod.create')); ?>" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Raw Material Products</a></div>
                </div>
                <?php if($rawBrandsprods->count() > 0): ?>
                                <!--end breadcrumb-->
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="hiringTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Date </th>
                                                        
                                                        <th>Product </th>
                                                        <th>Quantity In </th>
                                                        <th>Quantity Out </th>
                                                        <th>Balance</th>
                                                        <th>Description </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $rawBrandsprods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rawBrandsprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($rawBrandsprod->date); ?></td>

                                                        
                                                        
                                                        

                                                        
                                                        
                                                    
                                                        <td><?php echo e($rawBrandsprod->prod); ?></td>
                                                        <?php if($rawBrandsprod->qty_in == ''): ?>
                                                        <td>0</td>
                                                        <?php else: ?>
                                                        <td><?php echo e($rawBrandsprod->qty_in); ?></td>
                                                        <?php endif; ?>

                                                      
                                                        <?php if($rawBrandsprod->qty_out == ''): ?>
                                                        <td>0</td>
                                                        <?php else: ?>
                                                        <td><?php echo e($rawBrandsprod->qty_out); ?></td>
                                                        <?php endif; ?>
                                                        <td><?php echo e($rawBrandsprod->qty_in - $rawBrandsprod->qty_out); ?></td>
                                                        <td><?php echo e($rawBrandsprod->description); ?></td>
                                                        <td>
                                                            <div class="d-flex order-actions">
                                                                
                                                                <form method="POST" action="<?php echo e(route('adminrawbrandprod.destroy', $rawBrandsprod->id)); ?>">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo e(method_field('DELETE')); ?>

                                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete?')" style="outline:none;border:none;background:transparent">
                                                                        <a href="<?php echo e(route('adminrawbrandprod.destroy',['id'=>$rawBrandsprod->id])); ?>" class="ms-3"><i class='bx bxs-trash'></i></a>
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
                                            <?php echo $rawBrandsprods->withquerystring()->links('pagination::bootstrap-5'); ?>

                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <div class="alert alert-danger">NO Record Found</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!--end page wrapper -->



                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
<style>
    /* Add a border between tables */
    .card + .card {
        border-top: 1px solid #000000;
        margin-top: 20px; /* Adjust as needed */
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/admin/store/rawmaterial/index.blade.php ENDPATH**/ ?>