<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?php echo e(asset('/backend/assets/images/logo-icon.png')); ?>" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <a href="/hr/hiring">
                <h4 class="logo-text mt-3">
                    <?php if($user = Auth::user()->role == 'hr'): ?>
                        <p>Hr Manager</p>
                    <?php endif; ?>
                    <?php if($user = Auth::user()->role == 'user'): ?>
                        <p>User</p>
                    <?php endif; ?>
                    <?php if($user = Auth::user()->role == 'finance'): ?>
                        <p>Finance Manager</p>
                    <?php endif; ?>
                    <?php if($user = Auth::user()->role == 'production'): ?>
                        <p>Production Manager</p>
                    <?php endif; ?>
                    <?php if($user = Auth::user()->role == 'quality'): ?>
                        <p>Quality Assurance</p>
                    <?php endif; ?>
                    <?php if($user = Auth::user()->role == 'store'): ?>
                        <p>Store Manager</p>
                    <?php endif; ?>
                    <?php if($user = Auth::user()->role == 'admin'): ?>
                        <p>Admin</p>
                    <?php endif; ?>
                </h4>
            </a>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Human Resource</div>
            </a>
            <ul>
                <li> <a href="<?php echo e(route('hr.dashboard.index')); ?>"><i class='bx bx-radio-circle'></i>Dashboard</a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">Department</div>
                    </a>
                    <ul>
                        <li> <a href="<?php echo e(route('hr.departments.index')); ?>"><i class='bx bx-radio-circle'></i>View
                                Department</a>
                        </li>
                        <li> <a href="<?php echo e(route('hr.departments.create')); ?>"><i class='bx bx-radio-circle'></i>Add
                                Department</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                        </div>
                        <div class="menu-title">Employee</div>
                    </a>
                    <ul>
                        <li> <a href="<?php echo e(route('hr.employee.index')); ?>"><i class='bx bx-radio-circle'></i>View Employee</a>
                        </li>
                        <li> <a href="<?php echo e(route('hr.employee.create')); ?>"><i class='bx bx-radio-circle'></i>Add Employee</a>
                        </li>
                </li>
            </ul>

        </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="fa-solid fa-scale-unbalanced"></i>
            </div>
            <div class="menu-title">Loan</div>
        </a>
        <ul>
            <li> <a href="<?php echo e(route('hr.loan.index')); ?>"><i class='bx bx-radio-circle'></i>View Loan</a>
            </li>
            <li> <a href="<?php echo e(route('search.loan')); ?>"><i class='bx bx-radio-circle'></i>Add Loan</a>
             </li>
        </ul>
    </li>
    
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bx bx-repeat"></i>
            </div>
            <div class="menu-title">Salary</div>
        </a>
        <ul>
            <li> <a href="<?php echo e(route('hr.salary.index')); ?>"><i class='bx bx-radio-circle'></i>View Salary</a>
            </li>
            <li> <a href="<?php echo e(route('hr.salary.create')); ?>"><i class='bx bx-radio-circle'></i>Add Salary</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
            </div>
            <div class="menu-title">Stationary Order</div>
        </a>
        <ul>
            <li> <a href="<?php echo e(route('hr.order.index')); ?>"><i class='bx bx-radio-circle'></i>View Order</a>
            </li>
            <li> <a href="<?php echo e(route('hr.order.create')); ?>"><i class='bx bx-radio-circle'></i>Add Order </a>
            </li>
        </ul>
    </li>
    </li>
    </ul>


    </li>
    </ul>
    <!--end navigation-->
</div>
<?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/hr/body/sidebar.blade.php ENDPATH**/ ?>